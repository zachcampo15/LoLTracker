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
        helper = data[0]        #summonerName
        helper2 = data[1]       #region
        helper3 = data[2]       #API Key

    except:
        print("ERROR")
        sys.exit(1)

    #helperX = json.dumps(helper3)
    #print(helper2)
    #I send these three pieces off to my requestData function which will create the URL and give me back a JSON that has the ID for that specific summoner.
    #Once again, what requestData returns is a JSON.

    #responseJSON  = requestSummonerData(region, summonerName, APIKey)
    responseJSON  = requestSummonerData(helper2, helper, helper3)

    #print(responseJSON)

    ID = responseJSON['id']
    ID = str(ID)

    accountID = responseJSON['accountId']
    accountID = str(accountID)

    #print (ID)

    json_data = {}


    #GET RANKED DATA
    responseJSON2 = requestRankedData(helper2, ID, helper3, helper)
    #json_data.append(responseJSON2)
    #answer = json.dumps(responseJSON2)

    #GET CHAMPION MASTERY DATA
    
    responseJSON3 = requestChampionMasteryData(ID, helper3)

   
    #answer2 = json.dumps(responseJSON3)
    #json_data.append(responseJSON3)
    #print(json_data)
    #answer2 = json.dumps(json_data)
    #print(answer2)

    responseJSON4 = requestMatchIDs(accountID, helper3)
    
    
    MatchID = responseJSON4['matches'][0]['gameId']
    MatchID = str(MatchID)

    MatchID2 = responseJSON4['matches'][1]['gameId']
    MatchID2 = str(MatchID2)

    MatchID3 = responseJSON4['matches'][2]['gameId']
    MatchID3 = str(MatchID3)

    MatchID4 = responseJSON4['matches'][3]['gameId']
    MatchID4 = str(MatchID4)

    MatchID5 = responseJSON4['matches'][4]['gameId']
    MatchID5 = str(MatchID5)
    
    MatchID6 = responseJSON4['matches'][5]['gameId']
    MatchID6 = str(MatchID6)

    MatchID7 = responseJSON4['matches'][6]['gameId']
    MatchID7 = str(MatchID7)

    MatchID8 = responseJSON4['matches'][7]['gameId']
    MatchID8 = str(MatchID8)

    MatchID9 = responseJSON4['matches'][8]['gameId']
    MatchID9 = str(MatchID9)

    MatchID10 = responseJSON4['matches'][9]['gameId']
    MatchID10 = str(MatchID10)


    responseJSON5 = getMatchDetails(MatchID, helper3)
    responseJSON6 = getMatchDetails(MatchID2, helper3)
    responseJSON7 = getMatchDetails(MatchID3, helper3)
    responseJSON8 = getMatchDetails(MatchID4, helper3)
    responseJSON9 = getMatchDetails(MatchID5, helper3)
    responseJSON10 = getMatchDetails(MatchID6, helper3)
    responseJSON11 = getMatchDetails(MatchID7, helper3)
    responseJSON12 = getMatchDetails(MatchID8, helper3)
    responseJSON13 = getMatchDetails(MatchID9, helper3)
    responseJSON14 = getMatchDetails(MatchID10, helper3)
    
    
    
    json_data = {'RankedData':responseJSON2, 'ChampionMastery':responseJSON3, 'MatchIds':responseJSON4, 'MatchHistories':responseJSON5, 'MatchHistories2':responseJSON6, 'MatchHistories3':responseJSON7, 'MatchHistories4':responseJSON8, 'MatchHistories5':responseJSON9, 'MatchHistories6':responseJSON10, 'MatchHistories7':responseJSON11, 'MatchHistories8':responseJSON12, 'MatchHistories9':responseJSON13, 'MatchHistories10':responseJSON14}
    answer2 = json.dumps(json_data)
    print(answer2)

#This starts my program!
if __name__ == "__main__":
    main()

