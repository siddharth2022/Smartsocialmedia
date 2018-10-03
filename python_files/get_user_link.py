from pymongo import MongoClient
import sys

myclient = MongoClient()
mydb = myclient["thesocialmedia"]
mycol = mydb["user_info"]
mydoc = mycol.find()

for x in mydoc:
    print x["username"]+" "+x["profile_pic"]+","
    
