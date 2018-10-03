from pymongo import MongoClient
import sys

myclient = MongoClient()
mydb = myclient["thesocialmedia"]
mycol = mydb["developer_modes"]

mydoc = mycol.find()
for x in mydoc:
    print x["mirror_mode"]
    

