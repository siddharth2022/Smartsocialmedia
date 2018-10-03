

from pymongo import MongoClient
import sys
username = sys.argv[1]


myclient = MongoClient()
mydb = myclient["thesocialmedia"]
mycol = mydb["friends"]
mycol1 = mydb["media"]
myquery = { "username": username }

mydoc = mycol.find(myquery)
mydoc1 = mycol1.find()
for x in mydoc1:
        if( x["private"]!=1 ):
               str1= x["username"]+"~"+str(x["type"])+"~"+x["description"]+"~"+str(x["private"])+"~"+x["pic_icon"]+"~"+str(x["image"])+"~"+x["image_link"]+"~"+x["name"]
               print str1
               print "~"
               continue
        for y in mydoc:
            if(x["username"] == y["friend_username"] or x["username"] == username ):
               str1= x["username"]+"~"+str(x["type"])+"~"+x["description"]+"~"+str(x["private"])+"~"+x["pic_icon"]+"~"+str(x["image"])+"~"+x["image_link"]+"~"+x["name"]
               print str1
               print "~"
 





        
