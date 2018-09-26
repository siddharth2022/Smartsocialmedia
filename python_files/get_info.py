from pymongo import MongoClient
import sys
username = sys.argv[1]


myclient = MongoClient()
mydb = myclient["thesocialmedia"]
mycol = mydb["user_info"]
mycol1 = mydb["dob"]

myquery = { "username": username }
mydoc = mycol.find(myquery)
mydoc1 = mycol1.find(myquery)



for x in mydoc:
        str1= x["name"]+","+x["surname"]+","+x["state"]+","+x["country"]


for x in mydoc1:
        str2=(x["dob"])

        print str1
        print ","
        print str2
