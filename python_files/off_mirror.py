from pymongo import MongoClient
import sys



myclient = MongoClient()
mydb = myclient["thesocialmedia"]
mycol = mydb["developer_modes"]


myquery = { "mirror_mode": 1}

newvalues = { "$set": { "mirror_mode": 0 } }


mycol.update_many(myquery, newvalues)

