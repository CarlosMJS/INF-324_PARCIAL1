using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using MySql.Data;
using MySql.Data.MySqlClient;
using System.Configuration;
using System.Text;

public partial class _Default : System.Web.UI.Page
{
    MySqlConnection con = new MySqlConnection("server=localhost; port=3306; database=mibaseminombre; uid=root; password=''");
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["rol"] != null)
        {
            if (Session["rol"].ToString() != "director")
            {

                Response.Redirect("Default.aspx");
            }
        }
        else
        {
            Response.Redirect("index.aspx");
        }
    }
    protected void MySqlCommandd(object sender, EventArgs e)
    {
        con.Open();
        string query = "SELECT IFNULL(SUM(CASE WHEN xs.departamento = '01' THEN xd.notafinal END), 0) AS Chuquisaca, IFNULL(SUM(CASE WHEN xs.departamento = '02' THEN xd.notafinal END), 0) AS LaPaz, IFNULL(SUM(CASE WHEN xs.departamento = '03' THEN xd.notafinal END), 0) AS Cochabamba, IFNULL(SUM(CASE WHEN xs.departamento = '04' THEN xd.notafinal END), 0) AS Oruro, IFNULL(SUM(CASE WHEN xs.departamento = '05' THEN xd.notafinal END), 0) AS Potosi, IFNULL(SUM(CASE WHEN xs.departamento = '06' THEN xd.notafinal END), 0) AS Tarija, IFNULL(SUM(CASE WHEN xs.departamento = '07' THEN xd.notafinal END), 0) AS SantaCruz, IFNULL(SUM(CASE WHEN xs.departamento = '08' THEN xd.notafinal END), 0) AS Beni, IFNULL(SUM(CASE WHEN xs.departamento = '09' THEN xd.notafinal END), 0) AS Pando FROM INSCRIPCION xd JOIN PERSONA xs ON xd.CIestudiante = xs.CI;";
        List<MediaNotasPorDepartamento> resultados = new List<MediaNotasPorDepartamento>();
        using (con)
        {
            MySqlCommand command = new MySqlCommand(query, con);
            con.Open();
            MySqlDataReader reader = command.ExecuteReader();
            while (reader.Read())
            {
                string Chuquisaca = reader["Chuquisaca"].ToString();
                string LaPaz = reader["LaPaz"].ToString();
                string Cochabamba = reader["Cochabamba"].ToString();
                string Oruro = reader["Oruro"].ToString();
                string Potosi = reader["Potosi"].ToString();
                string Tarija = reader["Tarija"].ToString();
                string SantaCruz = reader["SantaCruz"].ToString();
                string Beni = reader["Beni"].ToString();
                string Pando = reader["Pando"].ToString();
                resultados.Add(new MediaNotasPorDepartamento { Chuquisaca = Chuquisaca, LaPaz = LaPaz, Cochabamba = Cochabamba, Oruro = Oruro, Potosi = Potosi, Tarija = Tarija, SantaCruz = SantaCruz, Beni = Beni, Pando = Pando});
            }
        }
        gridResultados.DataSource = resultados;
        gridResultados.DataBind();

        con.Close();
    }
    public class MediaNotasPorDepartamento
    {
        public string Chuquisaca { get; set; }
        public string LaPaz { get; set; }
        public string Cochabamba { get; set; }
        public string Oruro { get; set; }
        public string Potosi { get; set; }
        public string Tarija { get; set; }
        public string SantaCruz { get; set; }
        public string Beni { get; set; }
        public string Pando { get; set; }
    }
}