import sys, json
import base64
print ("Hello")

try:
    data = json.loads(sys.argv[1])
    #data2 = json.loads(sys.argv[1])
    helper = data[0]
    helper2 = data[1]
    helper3 = data[2]
    
except:
    print("ERROR")
    sys.exit(1)

#result = {'status':'HelloWorld'}

helper = json.dumps(data)
print(helper)
#helper2 = json.dumps(data[1])
#helper3 = json.dumps(data[2])
#print("Summoner Name from Python: " + helper + '\n')
#print("Region from Python: " + helper2 + '\n')
#print("API Key from Python: " + helper3 + '\n')



