import sys
import datetime
from pymongo import MongoClient 
 

username = sys.argv[1]
name = sys.argv[2]
type1 = 3
description = sys.argv[3]
private = sys.argv[4]
image=0
image_link ="x"
pic_icon="images/sid.jpg";


try :
    conn = MongoClient() 

except:   
    print("1") 
  


db = conn.thesocialmedia

#print dob
#print dob_str
collection = db.media

usr_info_rec1={
        "username":username,
        "name":name,
        "type":int(type1),
        "description":description,
        "private":int(private),
        "image":int(image),
        "image_link":image_link,
        "pic_icon":pic_icon
       
        
            }

try:
    
    rec_id1 = collection.insert_one(usr_info_rec1)
   
    print ("0")

except:

    print ("1")    
 
