Devon Test API ReadMe File

Framework Used to build REST APIs :  Symfony 5.3(latest Symfony Vesrion)


APIs for Team
1>Creating the Team:
API URL :  http://localhost:8000/api/v1/teams 
Method : POST
Input :     
                {
         "name" : "Team Name",
         "logoURI" : "Logo URI"
         }	
 


2>Getting the Teams list:
API URL :  http://localhost:8000/api/v1/teams 
Method : GET
Example Output :     
      [
    {
        "id": 1,
        "name": "Rajeev",
        "logoURI": "Logo1"
    },
    {
        "id": 2,
        "name": "Rakesh",
        "logoURI": "Logo2"
    },
    {
        "id": 3,
        "name": "Ranjith",
        "logoURI": "Logo3"
    },
    {
        "id": 4,
        "name": "Sachin",
        "logoURI": "Logo4"
    }
]



APIs for Player
1>Creating the Player:
API URL :  http://localhost:8000/api/v1/players 
Method : POST
Input :     
 {
    "firstName" : "Fname",
    "lastName" : "Lname",
    "playerimageURI" : "Player Image URI",
    "team" : 2   //Team Id created from the Team API
}
 



2>Getting the Player list:
API URL :  http://localhost:8000/api/v1/players
Method : GET
Example Output :     
      [
    {
        "team": {
            "id": 1,
            "name": "Rajeev",
            "logoURI": "Logo1"
            
        },
        "id": 1,
        "firstName": "Rajeev",
        "lastName": "Naik",
        "playerimageURI": "Player Logo1"
    },
    {
        "team": {
            "id": 2,
            "name": "Rakesh",
            "logoURI": "Logo2"
            
        },
        "id": 2,
        "firstName": "Rakesh",
        "lastName": "Yadav",
        "playerimageURI": "Player Logo2"
    },
    {
        "team": {
            "id": 2,
            "name": "Rakesh",
            "logoURI": "Logo2"
            
        },
        "id": 3,
        "firstName": "Sanjay",
        "lastName": "Naik",
        "playerimageURI": "Player Logo3"
    }
]







For Database and Entity(Table) creation I used below Commands

1>	bin/console doctrine:database:create

2>	bin/console doctrine:migrations:diff



3>	bin/console doctrine:migrations:migrate


         
