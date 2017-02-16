using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace BillingSoftware
{
    public partial class list : Form
    {
        MySqlConnection con = new MySqlConnection(@"Data Source=localhost; Database=billing; User id=root; Password=''");
        MySqlCommand cmd;
        public list()
        {
            InitializeComponent();
            load_table();
        }


        void load_table()
        {
            MySqlConnection con = new MySqlConnection(@"Data Source=localhost; Database=billing; User id=root; Password=''");
            MySqlCommand cmdDataBase = new MySqlCommand("SELECT * FROM company_list;", con);
            try
            {

                MySqlDataAdapter sda = new MySqlDataAdapter();
                sda.SelectCommand = cmdDataBase;
                DataTable dbdataset = new DataTable();
                sda.Fill(dbdataset);
                BindingSource bsource = new BindingSource();
                bsource.DataSource = dbdataset;
                dataGridView1.DataSource = bsource;
                sda.Update(dbdataset);
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }

        }
        void clear()
        {
            txtName.Text = "";
            txtCid.Text = "";
        }

        void delete()
        {
            if (txtName.Text == "")
               {
                MessageBox.Show("please select name to delete");
       
               }
              else
              {
                  if (MessageBox.Show("Sure ??", "DELETE", MessageBoxButtons.OKCancel, MessageBoxIcon.Warning) == DialogResult.OK)
                  {
                      string conString = "Data Source=localhost; Database=billing; User id=root; Password=''";
                      MySqlConnection con = new MySqlConnection(conString);
                      con.Open();
                      MySqlCommand cmd = new MySqlCommand("Delete  from company_list WHERE (company_name = '" + txtName.Text + "')");
                      cmd.Connection = con;
                      int a = cmd.ExecuteNonQuery();
                      if (a > 0)
                      {
                          load_table();
                          clear();
                          MessageBox.Show("Successfully deleted");
                          con.Close();
                      }
                      else
                      {
                          MessageBox.Show("No record found");
                      }
                  }




                  else
                  {
                      this.Show();
                  }
            }
        }
            
        private void txtRemoveCy_Click(object sender, EventArgs e)
        {
            delete();
        }

        void update()
        {
            if (txtName.Text == ""|| txtCid.Text == "")
            {
                MessageBox.Show("please select name to update");

            }
            else 
            {
                

                    string conString = "Data Source=localhost; Database=billing; User id=root; Password=''";
                    MySqlConnection con = new MySqlConnection(conString);
                    con.Open();
                    MySqlCommand cmd = new MySqlCommand("UPDATE company_list SET company_name = '" + txtName.Text + "' WHERE company_id='" + txtCid.Text + "'");
                    cmd.Connection = con;
                   int a= cmd.ExecuteNonQuery();
                   if (a > 0)
                   {
                       load_table();
                       clear();

                        MessageBox.Show("Successfully Updated");
                     
                      
                       con.Close();
                   }
                   else
                   {

                       clear();
                       MessageBox.Show("No Record  Found");
                   }

            }
            
        }

        private void txtEditCy_Click(object sender, EventArgs e)
        {
            update();
        }

        private void txtLoadCy_Click(object sender, EventArgs e)
        {
            this.Hide();
            Sales p = new Sales();
            p.Show();
           
        }

        private void txtCreateCy_Click(object sender, EventArgs e)
        {
            insert();
        }
        void insert()
        {

            if (txtName.Text == "" | txtCid.Text == "")
            {
                MessageBox.Show("please select name and Id to insert");

            }
            else
            {
                try
                {

                string conString = "Data Source=localhost; Database=billing; User id=root; Password=''";
                MySqlConnection con = new MySqlConnection(conString);
                con.Open();
                MySqlCommand cmd = new MySqlCommand("INSERT into company_list(company_id,company_name) values('" + txtCid.Text + "', '" + txtName.Text + "')");
                cmd.Connection = con;
                  cmd.ExecuteNonQuery();
             
                
                     load_table();
                     MessageBox.Show("Successfully saved");
                     clear();
                     con.Close();
                }
              
                 catch(Exception)
                 {
                     MessageBox.Show("User Id and name already exists");
                 }
                
               
            }
        }

        private void txtcloseCy_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        

        private void dataGridView1_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            string conString = "Data Source=localhost; Database=billing; User id=root; Password=''";
            MySqlConnection con = new MySqlConnection(conString);
            con.Open();
            int index = e.RowIndex;// get the Row Index
            DataGridViewRow selectedRow = dataGridView1.Rows[index];

            txtCid.Text = selectedRow.Cells[0].Value.ToString();
            txtName.Text = selectedRow.Cells[1].Value.ToString();
                
           
               
        }

        private void list_Load(object sender, EventArgs e)
        {

        }
               
      
        

      
    }
}
