namespace BillingSoftware
{
    partial class Login
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Login));
            this.btnAdminCancel = new System.Windows.Forms.Button();
            this.btnAdminLogin = new System.Windows.Forms.Button();
            this.txtAdminPwd = new System.Windows.Forms.TextBox();
            this.txtAdminId = new System.Windows.Forms.TextBox();
            this.lblAdminPwd = new System.Windows.Forms.Label();
            this.lblAdminId = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.checkRemember = new System.Windows.Forms.CheckBox();
            this.SuspendLayout();
            // 
            // btnAdminCancel
            // 
            this.btnAdminCancel.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnAdminCancel.Location = new System.Drawing.Point(282, 325);
            this.btnAdminCancel.Name = "btnAdminCancel";
            this.btnAdminCancel.Size = new System.Drawing.Size(116, 41);
            this.btnAdminCancel.TabIndex = 11;
            this.btnAdminCancel.Text = "Cancel";
            this.btnAdminCancel.UseVisualStyleBackColor = true;
            this.btnAdminCancel.Click += new System.EventHandler(this.btnAdminCancel_Click);
            // 
            // btnAdminLogin
            // 
            this.btnAdminLogin.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnAdminLogin.Location = new System.Drawing.Point(123, 325);
            this.btnAdminLogin.Name = "btnAdminLogin";
            this.btnAdminLogin.Size = new System.Drawing.Size(116, 41);
            this.btnAdminLogin.TabIndex = 10;
            this.btnAdminLogin.Text = "Login";
            this.btnAdminLogin.UseVisualStyleBackColor = true;
            this.btnAdminLogin.Click += new System.EventHandler(this.btnAdminLogin_Click);
            // 
            // txtAdminPwd
            // 
            this.txtAdminPwd.Font = new System.Drawing.Font("Times New Roman", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtAdminPwd.Location = new System.Drawing.Point(214, 222);
            this.txtAdminPwd.Name = "txtAdminPwd";
            this.txtAdminPwd.PasswordChar = '*';
            this.txtAdminPwd.Size = new System.Drawing.Size(230, 25);
            this.txtAdminPwd.TabIndex = 9;
            // 
            // txtAdminId
            // 
            this.txtAdminId.Font = new System.Drawing.Font("Times New Roman", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtAdminId.Location = new System.Drawing.Point(214, 163);
            this.txtAdminId.Name = "txtAdminId";
            this.txtAdminId.Size = new System.Drawing.Size(230, 25);
            this.txtAdminId.TabIndex = 8;
            this.txtAdminId.TextChanged += new System.EventHandler(this.txtAdminId_TextChanged);
            // 
            // lblAdminPwd
            // 
            this.lblAdminPwd.AutoSize = true;
            this.lblAdminPwd.BackColor = System.Drawing.Color.Transparent;
            this.lblAdminPwd.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblAdminPwd.ForeColor = System.Drawing.Color.White;
            this.lblAdminPwd.Location = new System.Drawing.Point(139, 222);
            this.lblAdminPwd.Name = "lblAdminPwd";
            this.lblAdminPwd.Size = new System.Drawing.Size(69, 19);
            this.lblAdminPwd.TabIndex = 7;
            this.lblAdminPwd.Text = "Password";
            // 
            // lblAdminId
            // 
            this.lblAdminId.AutoSize = true;
            this.lblAdminId.BackColor = System.Drawing.Color.Transparent;
            this.lblAdminId.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblAdminId.ForeColor = System.Drawing.Color.White;
            this.lblAdminId.Location = new System.Drawing.Point(139, 166);
            this.lblAdminId.Name = "lblAdminId";
            this.lblAdminId.Size = new System.Drawing.Size(69, 19);
            this.lblAdminId.TabIndex = 6;
            this.lblAdminId.Text = "Admin ID";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.Transparent;
            this.label1.Font = new System.Drawing.Font("Times New Roman", 24F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.Color.White;
            this.label1.Location = new System.Drawing.Point(27, 40);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(103, 36);
            this.label1.TabIndex = 12;
            this.label1.Text = "Login ";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.BackColor = System.Drawing.Color.Transparent;
            this.label2.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(29, 76);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(189, 19);
            this.label2.TabIndex = 13;
            this.label2.Text = "Please enter your credentials..";
            // 
            // checkRemember
            // 
            this.checkRemember.AutoSize = true;
            this.checkRemember.BackColor = System.Drawing.Color.Transparent;
            this.checkRemember.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.checkRemember.ForeColor = System.Drawing.Color.White;
            this.checkRemember.Location = new System.Drawing.Point(214, 270);
            this.checkRemember.Name = "checkRemember";
            this.checkRemember.Size = new System.Drawing.Size(152, 20);
            this.checkRemember.TabIndex = 14;
            this.checkRemember.Text = "Remember my Login";
            this.checkRemember.UseVisualStyleBackColor = false;
            // 
            // Login
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("$this.BackgroundImage")));
            this.ClientSize = new System.Drawing.Size(653, 443);
            this.Controls.Add(this.checkRemember);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btnAdminCancel);
            this.Controls.Add(this.btnAdminLogin);
            this.Controls.Add(this.txtAdminPwd);
            this.Controls.Add(this.txtAdminId);
            this.Controls.Add(this.lblAdminPwd);
            this.Controls.Add(this.lblAdminId);
            this.Name = "Login";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btnAdminCancel;
        private System.Windows.Forms.Button btnAdminLogin;
        private System.Windows.Forms.TextBox txtAdminPwd;
        private System.Windows.Forms.TextBox txtAdminId;
        private System.Windows.Forms.Label lblAdminPwd;
        private System.Windows.Forms.Label lblAdminId;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.CheckBox checkRemember;
    }
}

