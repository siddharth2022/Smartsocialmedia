from pymongo import MongoClient
import sys
username = sys.argv[1]


myclient = MongoClient()
mydb = myclient["thesocialmedia"]
mycol = mydb["users"]

myquery = { "username": username }
mydoc = mycol.find(myquery)



if(mydoc is None):
    print "2"

for x in mydoc:
      print x["_id"];