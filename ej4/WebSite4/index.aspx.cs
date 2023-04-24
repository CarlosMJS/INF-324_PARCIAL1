﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using MySql.Data;
using MySql.Data.MySqlClient;
using System.Configuration;
using System.Text;

public partial class index : System.Web.UI.Page
{
    MySqlConnection con = new MySqlConnection("server=localhost; port=3306; database=mibaseminombre; uid=root; password=''");
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        con.Open();
        string username = TextBoxUsername.Text.Trim();
        string password = TextBoxPassword.Text.Trim();

        string query = "SELECT COUNT(*), rol, CI FROM USUARIO WHERE usuario = @username AND password = @password";
        MySqlCommand cmd = new MySqlCommand(query, con);
        cmd.Parameters.AddWithValue("@username", username);
        cmd.Parameters.AddWithValue("@password", password);
        object result = cmd.ExecuteScalar();
        if (result != null)
        {
            int count = Convert.ToInt32(result);
            //Response.Write(count);
            MySqlDataReader reader = cmd.ExecuteReader();
            if (reader.Read() && count == 1)
            {
                Session["rol"] = reader.GetValue(1).ToString();
                Session["CI"] = reader.GetValue(2).ToString();
                //Response.Write(Session["rol"]);
                if (Session["rol"].ToString() == "director")
                {
                    Response.Redirect("Default.aspx");
                }
                else
                {
                    Response.Redirect("Default2.aspx");
                }
            }
            else
            {
                // Usuario o contraseña incorrectos, mostrar mensaje de error
                LabelError.Text = "Datos incorrectos";
            }
        }
        else
        {
            LabelError.Text = "no se conecto por algun error";
        }
        con.Close();
    }
}