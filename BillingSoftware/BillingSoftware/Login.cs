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
    public partial class Login : Form
    {
        public Login()
        {
            InitializeComponent();
            Init_Data();
        }


         private void btnAdminLogin_Click(object sender, EventArgs e)
           {

                if (txtAdminId.Text.Trim() == string.Empty || txtAdminPwd.Text.Trim() == string.Empty)
                {
                    MessageBox.Show("Please fill all the details");
                }
                else
                {
                    MySqlConnection con = new MySqlConnection(@"Data Source=localhost; Database=billing; User id=root; Password=''");
                    MySqlDataAdapter sda = new MySqlDataAdapter("SELECT COUNT(*) FROM login WHERE admin_id='" + txtAdminId.Text + "' AND password='" + txtAdminPwd.Text + "'", con);
                    DataTable dt = new DataTable();
                    sda.Fill(dt);
                    if (dt.Rows[0][0].ToString() == "1")
                    {
                        Save_Data();
                        this.Hide();
                       // Main mn = new Main();
                      //  mn.Show();
                        list cl = new list();
                        cl.Show();
                    }


                    else
                        MessageBox.Show("Invalid username or password");
                }



            }

    
       

              private void btnAdminCancel_Click(object sender, EventArgs e)
        {
            this.Close();
        }


              private void Init_Data()
                {
                    if (Properties.Settings.Default.Adminid != string.Empty)
                    {
                        if (Properties.Settings.Default.Remember == "yes")
                        {
                            txtAdminId.Text = Properties.Settings.Default.Adminid;
                            txtAdminPwd.Text = Properties.Settings.Default.Password;
                            checkRemember.Checked = true;
                        }
                        else
                        {
                            txtAdminId.Text = Properties.Settings.Default.Adminid;
                        }
                    }
                }


              private void Save_Data()
                {
                    if (checkRemember.Checked)
                    {
                           Properties.Settings.Default.Adminid = txtAdminId.Text;
                           Properties.Settings.Default.Password = txtAdminPwd.Text;
                           Properties.Settings.Default.Remember = "yes";
                           Properties.Settings.Default.Save();
                            
                    }
                        else
                        {
                           Properties.Settings.Default.Adminid = txtAdminId.Text;
                           Properties.Settings.Default.Password = "" ;
                           Properties.Settings.Default.Remember = "no";
                           Properties.Settings.Default.Save();
                           
                        }
                    
                }

              private void txtAdminId_TextChanged(object sender, EventArgs e)
              {

              }
        

        
}
}