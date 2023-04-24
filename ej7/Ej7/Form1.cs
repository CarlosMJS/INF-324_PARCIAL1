using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace Ej7
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();

            ServiceReference1.WebServiceSoapClient ws = new ServiceReference1.WebServiceSoapClient();
            DataSet ds = new DataSet();
            ds = ws.personaid();
            dataGridView1.DataSource = ds.Tables[0];

            DataGridViewButtonColumn btn_eliminar = new DataGridViewButtonColumn();
            dataGridView1.Columns.Add(btn_eliminar);
            btn_eliminar.HeaderText = "Acciones";
            btn_eliminar.Text = "Eliminar";
            btn_eliminar.Name = "btn_eliminar";
            btn_eliminar.UseColumnTextForButtonValue = true;
        }


        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            
            var senderGrid = (DataGridView)sender;
            if (senderGrid.Columns[e.ColumnIndex] is DataGridViewButtonColumn && e.RowIndex >= 0)
            {
                ServiceReference1.WebServiceSoapClient ws = new ServiceReference1.WebServiceSoapClient();
                int id = Convert.ToInt32(dataGridView1.Rows[e.RowIndex].Cells[1].Value);
                ws.baja(id);
                dataGridView1.Rows.RemoveAt(e.RowIndex);
            }
        }
        private void label3_Click(object sender, EventArgs e)
        {

        }

        

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void insert_data_Click1_Click(object sender, EventArgs e)
        {
            ServiceReference1.WebServiceSoapClient ws = new ServiceReference1.WebServiceSoapClient();
            ws.alta(Convert.ToInt32(CI.Text),Nombre_completo.Text,fechaNaci.Text,telefono.Text,departamento.Text);
            DataTable dato = new DataTable();
            dato = dataGridView1.DataSource as DataTable;
            DataRow datarow;
            datarow = dato.NewRow();
            datarow["CI"] = CI.Text;
            datarow["Nombre_completo"] = Nombre_completo.Text;
            datarow["fechaNaci"] = fechaNaci.Text;
            datarow["telefono"] = telefono.Text;
            datarow["departamento"] = departamento.Text;
            dato.Rows.Add(datarow);  
        }

        private void button1_Click(object sender, EventArgs e)
        {
            ServiceReference1.WebServiceSoapClient ws = new ServiceReference1.WebServiceSoapClient();
            DataSet ds = ws.personaid();
            dataGridView1.DataSource = ds.Tables[0];
        }
    }
}
