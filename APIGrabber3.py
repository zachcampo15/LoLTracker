#This tutorial was built by me, Farzain! You can ask me questions or troll me on Twitter (@farzatv)

#First we need to import requests. Installing this is a bit tricky. I included a step by step process on how to get requests in readme.txt which is included in the file along with this program.
import requests
import sys, json
#
def requestSummonerData(region, summonerName, APIKey):

    #Here is how I make my URL.  There are many ways to create these.
    
    #URL = "https://" + region + ".api.pvp.net/api/lol/" + region + "/v1.4/summoner/by-name/" + summonerName + "?api_key=" + APIKey
    URL = "https://na1.api.riotgames.com/lol/summoner/v4/summoners/by-name/"+ summonerName + "?api_key=" + APIKey
    #requests.get is a function given to us my our import "requests". It basically goes to the URL we made and gives us back a JSON.
    response = requests.get(URL)
    #Here I return the JSON we just got.
    return response.json()

def requestRankedData(region, ID, APIKey, summonerName):
    #URL = "https://" + region + ".api.pvp.net/api/lol/" + region + "/v2.5/league/by-summoner/" + ID + "/entry?api_key=" + APIKey
    URL = "https://na1.api.riotgames.com/lol/league/v4/entries/by-summoner/" +ID+ "?api_key=" + APIKey
#    print (URL)
    response = requests.get(URL)
    #print(response.json())
    return response.json()

def requestChampionMasteryData(ID, APIKey):
    URL = "https://na1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/"+ID+"?api_key=" + APIKey
    response = requests.get(URL)
    return response.json()

def requestMatchIDs(accountID, APIKey):   
    URL = "https://na1.api.riotgames.com/lol/match/v4/matchlists/by-account/"+ accountID + "?endIndex=10&api_key=" + APIKey
    response = requests.get(URL)
    return response.json()

def getMatchDetails(matchID, APIKey):
    URL = "https://na1.api.riotgames.com/lol/match/v4/matches/" + matchID + "?api_key=" + APIKey
    response = requests.get(URL)
    return response.json()

def getChampionDetails(accountID, championID, APIKey):
    URL = "https://na1.api.riotgames.com/lol/match/v4/matchlists/by-account/" + accountID + "?champion=" + championID + "&queue=400&queue=420&queue=430&queue=440&queue=450&queue=1200&endIndex=10&api_key="+ APIKey
    response = requests.get(URL)
    return response.json()



#9 and 6 not working right now
def main():
    #print ("\nWhat up homie. Enter your region to get started")
    #print ("Type in one of the following regions or else the program wont work correctly:\n")
    #print ("NA1 or EUW (Note: You can add more regions by just changing up the URL!\n")

    #I first ask the user for three things, their region, summoner name, and API Key.
    #These are the only three things I need from them in order to get create my URL and grab their ID.

    #region = (str)(input('Type in one of the regions above: '))
    #summonerName = (str)(input('Type your Summoner Name here and DO NOT INCLUDE ANY SPACES: '))
    #APIKey = (str)(input('Copy and paste your API Key here: '))

    #GET DATA FROM PHP
    try:
        data = json.loads(sys.argv[1])
        #yesplz = json.dumps(data)
        #print(yesplz)
        #print("DATA: ", data)
        helper = data[0]        #championID
        helper2 = data[1]       #apiKey
        helper3 = data[2]       #summonerName
        helper4 = data[3]       #region
        size = data[4]
        #print(size)
        
        if(size == 10):
            helper5 = data[5]
            helper5 = str(helper5)
            helper6 = data[6]
            helper6 = str(helper6)
            helper7 = data[7]
            helper7 = str(helper7)
            helper8 = data[8]
            helper8 = str(helper8)
            helper9 = data[9]
            helper9 = str(helper9)
            helper10 = data[10]
            helper10 = str(helper10)
            helper11 = data[11]
            helper11 = str(helper11)
            helper12 = data[12]
            helper12 = str(helper12)
            helper13 = data[13]
            helper13 = str(helper13)
            helper14 = data[14]
            helper14 = str(helper14)
            
        
        if(size == 9):
            helper5 = data[5]
            helper5 = str(helper5)
            helper6 = data[6]
            helper6 = str(helper6)
            helper7 = data[7]
            helper7 = str(helper7)
            helper8 = data[8]
            helper8 = str(helper8)
            helper9 = data[9]
            helper9 = str(helper9)
            helper10 = data[10]
            helper10 = str(helper10)
            helper11 = data[11]
            helper11 = str(helper11)
            helper12 = data[12]
            helper12 = str(helper12)
            helper13 = data[13]
            helper13 = str(helper13)
        
        if(size == 8):
            helper5 = data[5]
            helper5 = str(helper5)
            helper6 = data[6]
            helper6 = str(helper6)
            helper7 = data[7]
            helper7 = str(helper7)
            helper8 = data[8]
            helper8 = str(helper8)
            helper9 = data[9]
            helper9 = str(helper9)
            helper10 = data[10]
            helper10 = str(helper10)
            helper11 = data[11]
            helper11 = str(helper11)
            helper12 = data[12]
            helper12 = str(helper12)
        
        if(size == 7):
            helper5 = data[5]
            helper5 = str(helper5)
            helper6 = data[6]
            helper6 = str(helper6)
            helper7 = data[7]
            helper7 = str(helper7)
            helper8 = data[8]
            helper8 = str(helper8)
            helper9 = data[9]
            helper9 = str(helper9)
            helper10 = data[10]
            helper10 = str(helper10)
            helper11 = data[11]
            helper11 = str(helper11)
        
        if(size == 6):
            helper5 = data[5]
            helper5 = str(helper5)
            helper6 = data[6]
            helper6 = str(helper6)
            helper7 = data[7]
            helper7 = str(helper7)
            helper8 = data[8]
            helper8 = str(helper8)
            helper9 = data[9]
            helper9 = str(helper9)
            helper10 = data[10]
            helper10 = str(helper10)

        if(size == 5):
            helper5 = data[5]
            helper5 = str(helper5)
            helper6 = data[6]
            helper6 = str(helper6)
            helper7 = data[7]
            helper7 = str(helper7)
            helper8 = data[8]
            helper8 = str(helper8)
            helper9 = data[9]
            helper9 = str(helper9)

        if(size == 4):
            helper5 = data[5]
            helper5 = str(helper5)
            helper6 = data[6]
            helper6 = str(helper6)
            helper7 = data[7]
            helper7 = str(helper7)
            helper8 = data[8]
            helper8 = str(helper8)

        if(size == 3):
            helper5 = data[5]
            helper5 = str(helper5)
            helper6 = data[6]
            helper6 = str(helper6)
            helper7 = data[7]
            helper7 = str(helper7)

        if(size == 2):
            helper5 = data[5]
            helper5 = str(helper5)
            helper6 = data[6]
            helper6 = str(helper6)

        if(size == 1):
            helper5 = data[5]
            helper5 = str(helper5)

        # if(size == 0):

    except:
        #print(sys.argv[1])
        print("ERROR")
        sys.exit(1)

    #helperX = json.dumps(helper3)
    #print(helper2)
    #I send these three pieces off to my requestData function which will create the URL and give me back a JSON that has the ID for that specific summoner.
    #Once again, what requestData returns is a JSON.

    #responseJSON  = requestSummonerData(region, summonerName, APIKey)
    #responseJSON  = requestSummonerData(helper4, helper3, helper2)

    #print(responseJSON)

    #ID = responseJSON['id']
    #ID = str(ID)

    #accountID = responseJSON['accountId']
    #accountID = str(accountID)

    #print (ID)

    json_data = {}



    if(size == 10):
        responseJSON2 = getMatchDetails(helper5, helper2)
        responseJSON3 = getMatchDetails(helper6, helper2)
        
        responseJSON4 = getMatchDetails(helper7, helper2)
        responseJSON5 = getMatchDetails(helper8, helper2)
        responseJSON6 = getMatchDetails(helper9, helper2)
        responseJSON7 = getMatchDetails(helper10, helper2)
        responseJSON8 = getMatchDetails(helper11, helper2)
        responseJSON9 = getMatchDetails(helper12, helper2)
        responseJSON10 = getMatchDetails(helper13, helper2)
        responseJSON11 = getMatchDetails(helper14, helper2)

        # json_data = {'match1':responseJSON2, 'match2':responseJSON3}
        # answer2 = json.dumps(json_data)
        # print(answer2)

        #json_data = {'match1':responseJSON2}
        json_data = {'match1':responseJSON2, 'match2':responseJSON3, 'match3':responseJSON4, 'match4':responseJSON5, 'match5':responseJSON6, 'match6':responseJSON7, 'match7':responseJSON8, 'match8':responseJSON9, 'match9':responseJSON10, 'match10':responseJSON11}
        answer2 = json.dumps(json_data)
        print(answer2)

    if(size == 9):
        responseJSON2 = getMatchDetails(helper5, helper2)
        responseJSON3 = getMatchDetails(helper6, helper2)
        
        responseJSON4 = getMatchDetails(helper7, helper2)
        responseJSON5 = getMatchDetails(helper8, helper2)
        responseJSON6 = getMatchDetails(helper9, helper2)
        responseJSON7 = getMatchDetails(helper10, helper2)
        responseJSON8 = getMatchDetails(helper11, helper2)
        responseJSON9 = getMatchDetails(helper12, helper2)
        responseJSON10 = getMatchDetails(helper13, helper2)

        # json_data = {'match1':responseJSON2, 'match2':responseJSON3}
        # answer2 = json.dumps(json_data)
        # print(answer2)

        #json_data = {'match1':responseJSON2}
        json_data = {'match1':responseJSON2, 'match2':responseJSON3, 'match3':responseJSON4, 'match4':responseJSON5, 'match5':responseJSON6, 'match6':responseJSON7, 'match7':responseJSON8, 'match8':responseJSON9, 'match9':responseJSON10}
        answer2 = json.dumps(json_data)
        print(answer2)
    
    if(size == 8):
        responseJSON2 = getMatchDetails(helper5, helper2)
        responseJSON3 = getMatchDetails(helper6, helper2)
        
        responseJSON4 = getMatchDetails(helper7, helper2)
        responseJSON5 = getMatchDetails(helper8, helper2)
        responseJSON6 = getMatchDetails(helper9, helper2)
        responseJSON7 = getMatchDetails(helper10, helper2)
        responseJSON8 = getMatchDetails(helper11, helper2)
        responseJSON9 = getMatchDetails(helper12, helper2)

        # json_data = {'match1':responseJSON2, 'match2':responseJSON3}
        # answer2 = json.dumps(json_data)
        # print(answer2)

        #json_data = {'match1':responseJSON2}
        json_data = {'match1':responseJSON2, 'match2':responseJSON3, 'match3':responseJSON4, 'match4':responseJSON5, 'match5':responseJSON6, 'match6':responseJSON7, 'match7':responseJSON8, 'match8':responseJSON9}
        answer2 = json.dumps(json_data)
        print(answer2)

    if(size == 7):
        responseJSON2 = getMatchDetails(helper5, helper2)
        responseJSON3 = getMatchDetails(helper6, helper2)
        
        responseJSON4 = getMatchDetails(helper7, helper2)
        responseJSON5 = getMatchDetails(helper8, helper2)
        responseJSON6 = getMatchDetails(helper9, helper2)
        responseJSON7 = getMatchDetails(helper10, helper2)
        responseJSON8 = getMatchDetails(helper11, helper2)

        # json_data = {'match1':responseJSON2, 'match2':responseJSON3}
        # answer2 = json.dumps(json_data)
        # print(answer2)

        #json_data = {'match1':responseJSON2}
        json_data = {'match1':responseJSON2, 'match2':responseJSON3, 'match3':responseJSON4, 'match4':responseJSON5, 'match5':responseJSON6, 'match6':responseJSON7, 'match7':responseJSON8}
        answer2 = json.dumps(json_data)
        print(answer2)

    if(size == 6):
        responseJSON2 = getMatchDetails(helper5, helper2)
        responseJSON3 = getMatchDetails(helper6, helper2)
        
        responseJSON4 = getMatchDetails(helper7, helper2)
        responseJSON5 = getMatchDetails(helper8, helper2)
        responseJSON6 = getMatchDetails(helper9, helper2)
        responseJSON7 = getMatchDetails(helper10, helper2)

        # json_data = {'match1':responseJSON2, 'match2':responseJSON3}
        # answer2 = json.dumps(json_data)
        # print(answer2)

        #json_data = {'match1':responseJSON2}
        json_data = {'match1':responseJSON2, 'match2':responseJSON3, 'match3':responseJSON4, 'match4':responseJSON5, 'match5':responseJSON6, 'match6':responseJSON7}
        answer2 = json.dumps(json_data)
        print(answer2)

    if(size == 5):
        responseJSON2 = getMatchDetails(helper5, helper2)
        responseJSON3 = getMatchDetails(helper6, helper2)
        
        responseJSON4 = getMatchDetails(helper7, helper2)
        responseJSON5 = getMatchDetails(helper8, helper2)
        responseJSON6 = getMatchDetails(helper9, helper2)

        # json_data = {'match1':responseJSON2, 'match2':responseJSON3}
        # answer2 = json.dumps(json_data)
        # print(answer2)

        #json_data = {'match1':responseJSON2}
        json_data = {'match1':responseJSON2, 'match2':responseJSON3, 'match3':responseJSON4, 'match4':responseJSON5, 'match5':responseJSON6}
        answer2 = json.dumps(json_data)
        print(answer2)

    if(size == 4):
        responseJSON2 = getMatchDetails(helper5, helper2)
        responseJSON3 = getMatchDetails(helper6, helper2)
        
        responseJSON4 = getMatchDetails(helper7, helper2)
        responseJSON5 = getMatchDetails(helper8, helper2)

        # json_data = {'match1':responseJSON2, 'match2':responseJSON3}
        # answer2 = json.dumps(json_data)
        # print(answer2)

        #json_data = {'match1':responseJSON2}
        json_data = {'match1':responseJSON2, 'match2':responseJSON3, 'match3':responseJSON4, 'match4':responseJSON5}
        answer2 = json.dumps(json_data)
        print(answer2)

    if(size == 3):
        responseJSON2 = getMatchDetails(helper5, helper2)
        responseJSON3 = getMatchDetails(helper6, helper2)
        
        responseJSON4 = getMatchDetails(helper7, helper2)
        

        # json_data = {'match1':responseJSON2, 'match2':responseJSON3}
        # answer2 = json.dumps(json_data)
        # print(answer2)

        #json_data = {'match1':responseJSON2}
        json_data = {'match1':responseJSON2, 'match2':responseJSON3, 'match3':responseJSON4}
        answer2 = json.dumps(json_data)
        print(answer2)

    if(size == 2):
        responseJSON2 = getMatchDetails(helper5, helper2)
        responseJSON3 = getMatchDetails(helper6, helper2)
        

        # json_data = {'match1':responseJSON2, 'match2':responseJSON3}
        # answer2 = json.dumps(json_data)
        # print(answer2)

        #json_data = {'match1':responseJSON2}
        json_data = {'match1':responseJSON2, 'match2':responseJSON3}
        answer2 = json.dumps(json_data)
        print(answer2)

    if(size == 1):
        responseJSON2 = getMatchDetails(helper5, helper2)
        

        # json_data = {'match1':responseJSON2, 'match2':responseJSON3}
        # answer2 = json.dumps(json_data)
        # print(answer2)

        #json_data = {'match1':responseJSON2}
        json_data = {'match1':responseJSON2}
        answer2 = json.dumps(json_data)
        print(answer2)

    # if(size == 0):
        

    #     # json_data = {'match1':responseJSON2, 'match2':responseJSON3}
    #     # answer2 = json.dumps(json_data)
    #     # print(answer2)

    #     #json_data = {'match1':responseJSON2}
    #     json_data = {'match1':0}
    #     answer2 = json.dumps(json_data)
    #     print(answer2)

    # #responseJSON2 = getChampionDetails(accountID, helper, helper2)


    
    #json_data.append(responseJSON2)
    #answer = json.dumps(responseJSON2)

   
    #answer2 = json.dumps(responseJSON3)
    #json_data.append(responseJSON3)
    #print(json_data)
    #answer2 = json.dumps(json_data)
    #print(answer2)

    #responseJSON4 = requestMatchIDs(accountID, helper3)
    
    #print(responseJSON)
    
    
    
    

#This starts my program!
if __name__ == "__main__":
    main()

