from pymongo import MongoClient
import sys
username = sys.argv[1]


myclient = MongoClient()
mydb = myclient["thesocialmedia"]
mycol = mydb["notification"]


myquery = { "username": username }
mydoc = mycol.find(myquery)




for x in mydoc:
        str1= str(x["type"])+","+x["description"]+","+x["image"]+","+x["link"]+","+str(x['seen'])
        print str1
        print ","
