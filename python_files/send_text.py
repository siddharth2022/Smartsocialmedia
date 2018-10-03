from twilio.rest import Client

# Your Account SID from twilio.com/console
account_sid = "AC22d33164f669663f99e0323183afc104"
# Your Auth Token from twilio.com/console
auth_token  = "f98aaba0e214239d67f90c0bb31698c5"

client = Client(account_sid, auth_token)

message = client.messages.create(
    to="07405937339", 
    from_="07069499460",
    body="Hello from Python!")

print(message.sid)
