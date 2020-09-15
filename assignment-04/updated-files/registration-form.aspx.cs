using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace esports_registration
{
    public partial class WebForm1 : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (Request.QueryString["gamertag"] != null)
            {
                string gamerTag = Request.QueryString["gamerTag"];
                Response.Write(gamerTag);
            }

        }

        protected void btnSubmit_Click(object sender, EventArgs e)
        {
            string name = txtName.Text;
            string email = txtEmail.Text;
            string address = txtAddress.Text;
            string phoneNum = txtPhoneNum.Text;
            string gamertag = txtGamertag.Text;

            HttpCookie nameCookie = new HttpCookie("name_cookie");
            HttpCookie emailCookie = new HttpCookie("email_cookie");
            nameCookie.Name = "name"; 
            nameCookie.Value = name;
            emailCookie.Name = "email";
            emailCookie["email"] = email;
            nameCookie.Expires.AddMinutes(10);
            emailCookie.Expires.AddMinutes(10);

            Response.SetCookie(nameCookie);
            Response.SetCookie(emailCookie);
            Response.Write("Cookie is set");

            Session["address"] = address;
            Session["phoneNum"] = phoneNum;
            Session["gamertag"] = gamertag;

            Response.Redirect("registration-form.aspx?$gamertag=" + txtGamertag.Text);  //Redirects to a new page and takes variables.
        }

        protected void btnGet_Click(object sender, EventArgs e)
        {
            string name = Request.Cookies.Get(0).Value;
            string email = Request.Cookies.Get(1).Value;

            Response.Write("User Information<br/>");
            Response.Write("----------------<br/>");
            Response.Write("Name: " + name + "<br/>");
            Response.Write("Email: " + email + "<br/>");

            if (Session["address"] != null)
            {
                Response.Write("Address: " + Session["address"].ToString() + "<br/>");
            }
            if (Session["phoneNum"] != null)
            {
                Response.Write("Phone Number: " + Session["phoneNum"].ToString() + "<br/>");
            }
            if (Session["gamertag"] != null)
            {
                Response.Write("GamerTag: " + Session["gamertag"].ToString() + "<br/>");
            }

        }
    }
}