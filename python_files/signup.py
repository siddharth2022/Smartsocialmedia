import sys
from pymongo import MongoClient 


name = sys.argv[1]
surname = sys.argv[2]
mobileno = sys.argv[3]
email = sys.argv[4]
password = sys.argv[5]
dob = sys.argv[6]

try :
    conn = MongoClient() 

except:   
    print("1") 
  

db = conn.thesocialmedia
  

collection = db.users
collection1 = db.user_info

usr_rec1 = { 
        "username":email, 
        
        "password":password
        }
usr_info_rec1={
        "username":email,
        "name":name,
        "surname":surname,
        "mobileno":int(mobileno),
        "email":email
        }

try:
    
    rec_id1 = collection.insert_one(usr_rec1)
    info_rec_id1 = collection1.insert_one(usr_info_rec1) 
    print ("0")

except:

    print ("1")    
