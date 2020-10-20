using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace esports_registration
{
    public partial class WebForm2 : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void btnSubmit_Click(object sender, EventArgs e)
        {
            string username = txtUsername.Text;
            string password = txtPassword.Text;

            Session["username"] = username;
            Session["password"] = password;
        }

        protected void btnGet_Click(object sender, EventArgs e)
        {
            Response.Write("User Information<br/>");
            Response.Write("----------------<br/>");
            if (Session["username"] != null)
            {
                Response.Write("Username: " + Session["username"].ToString() + "<br/>");
            }
            if (Session["password"] != null)
            {
                Response.Write("Password: " + Session["password"].ToString() + "<br/>");
            }
        }
    }
}