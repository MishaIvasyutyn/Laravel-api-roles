<p align="center">
<a>REST API with Roles and Permissions</a>
</p>

## CREATING A NEW MESSAGE

    POST /api/posts
    {
        "title":"This is a new post title",
        "content":"This is an new body
    }

![alt text](public/images/1.newpostendpoint-laravelsanctum.png "Create")

![alt text](public/images/2.newpostendpointselectjsonasbody-laravelsanctum.png "Title")

![alt text](public/images/3.newpostendpointpostcreatedsuccessfully-laravelsanctum.png "Title")

## MESSAGE UPDATE

    PUT /api/posts/1
    {
        "title":"This is a new post title",
        "content":"This is an new body
    }

![alt text](public/images/4.updatepostendpoint-laravelsanctum.png "Update")

## RECEIVING A MESSAGE

    GET /api/posts/1

![alt text](public/images/5.getapostsuccess.png "Get")
![alt text](public/images/6.getapostnotfound.png "GetNotfound")

## RECEIVING All MESSAGES

    GET /api/posts

![alt text](public/images/7.getallpostendpoint.png "GetAll")

## CREATING A NEW USER WITH  WRITER  PERMISSION

    POST /api/users/writter
    {
    "name": "First One",
    "email":"user1@email.com",
    "password":"password1",
    "password_confirmation":"password1"
    }

![alt text](public/images/8.newwriteruser.png "NewUser")

## CREATING A NEW SUBSCRIBER USER

    POST /api/users/subscriber
    {
    "name": "User Subscriber",
    "email":"usersubscriber@me.com",
    "password":"password2",
    "password_confirmation":"password2"
     } 

![alt text](public/images/9.newsubscriberuser.png "NewUser")
