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
    public partial class Company_List : Form
    {
        static string conString = "Data Source=localhost; Database=billing; User id=root; Password=''";
        MySqlConnection con = new MySqlConnection(conString);
       // MySqlCommand cmd;
       // MySqlDataAdapter adapter;
       // DataTable table = new DataTable();

      
       // int indexRow;
        public Company_List()
        {
            InitializeComponent();
            //grid property
            dataGridView1.ColumnCount = 1;
            dataGridView1.Columns[0].Name = "Name";

            //selectoin mode
            dataGridView1.SelectionMode = DataGridViewSelectionMode.FullRowSelect;
            dataGridView1.MultiSelect = false;
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
        private void txtcloseCy_Click(object sender, EventArgs e)
        {
            this.Close();

        }

        private void txtCreateCy_Click(object sender, EventArgs e)
        {
           
       if (txtName.Text == "")
       {
        MessageBox.Show("Values Should not Be empty!");
        //textBox3.Focus();
      }
      else
        {      
        DataTable dt = dataGridView1.DataSource as DataTable;
        dt.Rows.Add(txtName.Text);
        dataGridView1.DataSource = dt;
        
        }
}
            //add(txtName.Text);
            //New_Comapny co = new New_Comapny();
            //co.Show();
   

        private void txtRemoveCy_Click(object sender, EventArgs e)
        {
            delete();
           //string selected = dataGridView1.SelectedRows[0].Cells[0].Value.ToString();
          // string name1 = ToString(selected);
            //delete(selected);
        }

        /*private void add(string name)
        {
            dataGridView1.Rows.Add(name);
            ClearTxts();
        }*/
        private void ClearTxts()
        {
            txtName.Text = "";
        }


        private void delete()
        {
            if (MessageBox.Show("Sure ??", "DELETE", MessageBoxButtons.OKCancel, MessageBoxIcon.Warning) == DialogResult.OK)
            {
                int index = dataGridView1.SelectedRows[0].Index;

                dataGridView1.Rows.RemoveAt(index);
                    ClearTxts();

            }
            
            /*
            //MySqlConnection con = new MySqlConnection(@"Data Source=localhost; Database=billing; User id=root; Password=''");
            string sql = "DELETE  FROM company_list WHERE company_name='" + name + "'";
            cmd = new MySqlCommand(sql, con);
            try
            {

                con.Open();
                adapter = new MySqlDataAdapter(cmd);
                adapter.DeleteCommand = con.CreateCommand();
                adapter.DeleteCommand.CommandText = sql;
                if (MessageBox.Show("Sure ??", "DELETE", MessageBoxButtons.OKCancel, MessageBoxIcon.Warning) == DialogResult.OK)
                {
                    if (cmd.ExecuteNonQuery() > 0)
                    {
                        MessageBox.Show("Successfully deleted");
                    }
                }
                con.Close();
                load_table();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }*/
            
        }
        

       

        private void update()
        {
             dataGridView1.SelectedRows[0].Cells[0].Value = txtName.Text ;
             ClearTxts();
            /*string sql = "UPDATE company_list SET company_name='" + name + "'";
            cmd = new MySqlCommand(sql, con);;
            try
            {

                con.Open();
                adapter = new MySqlDataAdapter(cmd);
                adapter.UpdateCommand = con.CreateCommand();
                adapter.UpdateCommand.CommandText = sql;
                if (adapter.UpdateCommand.ExecuteNonQuery()>0)
                {
                    MessageBox.Show("Successfully Updated");
                }
                con.Close();
                load_table();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }*/
        }

        private void txtEditCy_Click(object sender, EventArgs e)
        {
            update();
         // string selected = dataGridView1.SelectedRows[0].Cells[0].Value.ToString();
          //string name2 = ToString(selected);
           // update(selected);
        }

       

       
        

    }
}
        


       
    