using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
using System.Data;
using MySql.Data;
using MySql.Data.MySqlClient;
using System.Configuration;
using System.Text;
using MySql.Data.Types;

/// <summary>
/// Descripción breve de WebService
/// </summary>
[WebService(Namespace = "http://tempuri.org/")]
[WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
// Para permitir que se llame a este servicio web desde un script, usando ASP.NET AJAX, quite la marca de comentario de la línea siguiente. 
// [System.Web.Script.Services.ScriptService]
public class WebService : System.Web.Services.WebService
{

    public WebService()
    {

        //Elimine la marca de comentario de la línea siguiente si utiliza los componentes diseñados 
        //InitializeComponent(); 
    }

    [WebMethod]
    public string HelloWorld()
    {
        return "Hola a todos";
    }
    [WebMethod]
    public DataSet personaid()
    {
        string connectionString = "server=localhost; port=3306; database=mibaseminombre; uid=root; password=''";
        string query = "SELECT * FROM personaid";

        using (MySqlConnection connection = new MySqlConnection(connectionString))
        {
            using (MySqlDataAdapter adapter = new MySqlDataAdapter(query, connection))
            {
                DataSet ds = new DataSet();
                adapter.Fill(ds, "personaid");
                return ds;
            }
        }
    }
    [WebMethod]
    public bool alta(int CI, string Nombre_completo, string fechaNaci, string telefono, string departamento)
    {
        MySqlConnection con = new MySqlConnection("server=localhost; port=3306; database=mibaseminombre; uid=root; password=''");
        MySqlCommand command = new MySqlCommand("INSERT INTO personaid (CI, Nombre_completo, fechaNaci, telefono, departamento) VALUES (@CI, @Nombre_completo, @fechaNaci, @telefono, @departamento)", con);
        command.Parameters.AddWithValue("@CI", CI);
        command.Parameters.AddWithValue("@Nombre_completo", Nombre_completo);
        command.Parameters.AddWithValue("@fechaNaci", fechaNaci);
        command.Parameters.AddWithValue("@telefono", telefono);
        command.Parameters.AddWithValue("@departamento", departamento);
        con.Open();
        command.ExecuteNonQuery();
        con.Close();
        return true;
    }
    [WebMethod]
    public Boolean baja(int id)
    {
        MySqlConnection con = new MySqlConnection("server=localhost; port=3306; database=mibaseminombre; uid=root; password=''");
        MySqlCommand command = new MySqlCommand("DELETE FROM personaid WHERE id = @id", con);
        MySqlParameter parameter = command.Parameters.Add("@id", MySqlDbType.Int32);
        parameter.Value = id;
        con.Open();
        command.ExecuteNonQuery();
        con.Close();
        return true;
    }
    [WebMethod]
    public bool cambio(int id, int CI, string Nombre_completo, DateTime fechaNaci, string telefono, string departamento)
    {
        MySqlConnection con = new MySqlConnection("server=localhost; port=3306; database=mibaseminombre; uid=root; password=''");
        MySqlCommand command = new MySqlCommand("UPDATE personaid SET CI = @CI, Nombre_completo = @Nombre_completo, fechaNaci = @fechaNaci, telefono = @telefono, departamento = @departamento WHERE id = @id", con);
        command.Parameters.Add("@CI", MySqlDbType.Int32).Value = CI;
        command.Parameters.Add("@Nombre_completo", MySqlDbType.VarChar).Value = Nombre_completo;
        command.Parameters.Add("@fechaNaci", MySqlDbType.DateTime).Value = fechaNaci;
        command.Parameters.Add("@telefono", MySqlDbType.VarChar).Value = telefono;
        command.Parameters.Add("@departamento", MySqlDbType.VarChar).Value = departamento;
        MySqlParameter parameter = command.Parameters.Add("@id", MySqlDbType.Int32);
        parameter.Value = id;
        con.Open();
        command.ExecuteNonQuery();
        con.Close();
        return true;
    }

}
