using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Web;

namespace esports_registration
{
    public class Users
    {
        public DataSet getAllUsers()
        {

            Database myDatabase = new Database();
            string myQuery = "spGetAllUsers";
            DataSet myDataSet = myDatabase.getQueryWithoutParameters(myQuery);

            return myDataSet;

        }

        
        public DataSet getUserByUserID(int userid)
        {

            Database myDatabase = new Database();
            string myQuery = "spGetUserByUserID";
            SqlParameter[] myParameters = new SqlParameter[1];
            myParameters[0] = new SqlParameter("userID", userid);
            DataSet myDataSet = myDatabase.getQueryWithParameters(myQuery, myParameters);

            return myDataSet;
        }

        /*
        public void InsertUser(string firstname, string lastname, string userName, string password, string gamerTag, string phone, int subscribed, int admin)
        {
            Database myDatabase = new Database();
            string myQuery = "spInsertUser";
            SqlParameter[] myParameters = new SqlParameter[8];
            myParameters[0] = new SqlParameter("firstName", firstname);
            myParameters[1] = new SqlParameter("lastName", lastname);
            myParameters[2] = new SqlParameter("username", userName);
            myParameters[3] = new SqlParameter("pwd", password);
            myParameters[4] = new SqlParameter("gamertag", gamerTag);
            myParameters[5] = new SqlParameter("phoneNum", phone);
            myParameters[6] = new SqlParameter("subsribedchk", subscribed);
            myParameters[7] = new SqlParameter("adminchk", admin);

        }
        */
        
    }
}
