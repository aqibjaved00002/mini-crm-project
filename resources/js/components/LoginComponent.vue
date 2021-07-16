<template>
    <div class="container">
        <div id="heading">
            <h2 class="text-center"><img src="images/adminlogo.png" alt=""></h2>
        </div><br>
        <div id="form">
            <form action="#" method="#">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email"  aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</template>

<style scoped>
    .container{
        margin-left: 35%;
        height: 600px;
        width: 30%;
        background-color: rgb(151, 204, 235);
    }
    #heading{
        height: 100px;
        width: 100%;
        background-color: rgb(70, 121, 187);
    }
    h2{
        padding: 20px;
    }
    #form{
        height: 100px;
        width: 100%;
        margin-top: 20%;
        margin-left: 5%;
    }
    input[type=email], input[type=password] {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 90%;
    }
</style>