from pymongo import MongoClient
import sys
username = sys.argv[1]


myclient = MongoClient()
mydb = myclient["thesocialmedia"]
mycol = mydb["notification"]


myquery = { "username": username }

newvalues = { "$set": { "seen": 0 } }


mycol.update_many(myquery, newvalues)

