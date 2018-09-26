import sys
import speech_recognition as sr

spoken_text =''

def listen( spoken_text ):
    r = sr.Recognizer()
    with sr.Microphone() as source:
        a = r.listen(source)

        try:
                    print ":"
                    spoken_text = r.recognize_google(a)
                    return spoken_text
        except sr.UnknownValueError:
                print('could not understand audio')
                return ""
        except sr.RequestError as e:
                print("Recog Error; (0)".format(e))
                engine1("i am not connect to the internet. i need an internet connection to connect to my server")
                time.sleep(5)


                return ""


print listen(spoken_text)
