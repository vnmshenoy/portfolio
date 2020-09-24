using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Net;
using System.Net.Mail;

namespace MyPort
{
    public partial class Index : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }
        [WebMethod]
        public static void Subscribe(string name, string email)
        {
            MailMessage Msg = new MailMessage();
            //Msg.From = new MailAddress("vnmshenoy@gmail.com", "hello");
            Msg.From = new MailAddress("manjulog@manjustechblog.com");
            Msg.To.Add("vnmshenoy@gmail.com");
            Msg.Subject = "Send Mail with HTML File";
            Msg.Body = "Test";
            System.Net.Mail.SmtpClient client = new SmtpClient();
            client.Host = "manjustechblog.com";
            client.Port = 25;
            client.Credentials = new NetworkCredential("manjulog@manjustechblog.com", "D~w2n24j");
            client.Send(Msg);
        }
    }
}
