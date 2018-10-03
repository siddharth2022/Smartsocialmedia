from pymongo import MongoClient
import sys

username=sys.argv[1]
myclient = MongoClient()
mydb = myclient["thesocialmedia"]
mycol = mydb["user_info"]
mydoc = mycol.find()

for x in mydoc:
    if(x["username"]!=username):
        print x["name"]+" "+x["surname"]+","
    
