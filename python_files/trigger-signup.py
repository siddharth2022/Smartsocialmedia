from mongotriggers import MongoTrigger
from pymongo import MongoClient

def notify_manager(op_document):
    print ('new entry')

client = MongoClient(host='localhost', port=27017)
triggers = MongoTrigger(conn)
triggers.register_op_trigger(notify_manager, 'thesocialmedia', 'user')

triggers.tail_oplog()
client['thesocialmedia']['user'].insert_many({"profile_pic": "images/avatar3.png"},
                                             {"state":"not set"},
                                             {"country":"not set"})
triggers.stop_tail()
