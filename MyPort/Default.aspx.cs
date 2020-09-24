using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Net;
using System.Net.Mail;
using System.Text.RegularExpressions;

namespace MyPort
{
    public partial class Default : System.Web.UI.Page
    {
        public static string Black_Listed_Tags =
          "</?\\s*Iframe\\s*>?|</?\\s*script\\s*>?|</?\\s*img\\s*>?|</?\\s*i\\s*>?|;|</?\\s*a\\s*>?|</?\\s*javascript\\s*>?|</?\\s*svg\\s*>?|</?\\s*body\\s*>?";
        protected void Page_Load(object sender, EventArgs e)
        {

        }
        [WebMethod]
        public static void Subscribe(string name, string email, string comment, string phone)
        {
            MailMessage Msg = new MailMessage();
            name=validateProperty(name);
            email=validateProperty(email);
            comment=validateProperty(comment);
            phone=validateProperty(phone);
            Msg.From = new MailAddress("manjulog@manjustechblog.com");
            Msg.To.Add("vnmshenoy@gmail.com");
            Msg.Subject = "Send Mail with HTML File";
            Msg.Body = "sent by: "+name+"**** email is "+email+"*****comment is" +comment+"***** phone is:"+phone;
            System.Net.Mail.SmtpClient client = new SmtpClient();
            client.Host = "manjustechblog.com";
            client.Port = 25;
            client.Credentials = new NetworkCredential("manjulog@manjustechblog.com", "D~w2n24j");
            client.Send(Msg);
        }
        public static string validateProperty(string b)
        {
            string replacement = "";

            while (Regex.IsMatch(b, Black_Listed_Tags, RegexOptions.IgnoreCase))
            {
                b = Regex.Replace(b, Black_Listed_Tags, replacement, RegexOptions.IgnoreCase);
            }

            return b;
        }
    }
}
