from pymongo import MongoClient
import sys
username = sys.argv[1]
password = sys.argv[2]

myclient = MongoClient()
mydb = myclient["thesocialmedia"]
mycol = mydb["users"]

myquery = { "username": username }
mydoc = mycol.find(myquery)



if(mydoc is None):
    print "2"

for x in mydoc:
      if x is None:
          print "2"
      if (password==x["password"]):
       print "0"
      else :
       print "1"

