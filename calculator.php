<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<style>
    body {
        font-family: "Lato", sans-serif!important;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: springgreen;
    }
    html{
        font-family: "Lato", sans-serif!important;
    }
    
    .card {
        justify-content:center;
        align-items: center;
        height: 280px;
        width: 600px;
        background-color: #686866;
        position: relative;
        margin-left:auto ;
        margin-right:auto ;
        margin-top: 150px;
        padding: 10px;
        border-radius: 25px;
        border: 2px solid none;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        text-align: center;
    }
    
   
    .app-from{
        float: right;
        margin-top: 50px;

    }
    .infinite{
        margin-left: 6px;
    }
    .app-tital{
        margin-left: 50px;
        margin-top: 100px;
        float: left;
        font-size: 2.0rem;
        border-left:4px solid cyan ;
    }
    
     .app-form-group{
         position: relative;
         padding: 15px 0 0;
         margin-top: 4px;
         width: auto;
         background-color: #686868;
         margin-right: 50px;
         margin-bottom: 10px;
     }
     .app-form-control{
         display: block;
         font-family: inherit;
         width: 100%;
         border: 0;
         border-bottom: 2px solid #fff;
         outline: 0;
         font-size: 1.1rem;
         color: black;
         background-color: #686868;
         transition: border-color 0.2s;
         text-align: center;
     }
     .app-form-control:after{
        background-color: #fff;
        width: 100%;
     }
     .app-form-button{
         width: 50%;
         height: 15%;
         font-size: 1.3rem;
         float: left;
         color: #fff;
        background-color: cyan;
        border-radius: 12px;
        border: 0;
        outline: 0;
        cursor: pointer;
     }
     .select-style select{
         height: 30px;
         width: 85%;
         float: left;
         background-color: #686868;
         margin-bottom: 20px;
         border-radius: 12px;
         background-color: cyan;
         outline: 0;
         cursor: pointer;
     }
     .showdata{
        
        bottom: 35px;
        position: absolute;
        width: 90%;
        height: 0px;
        cursor: pointer;
         }
    .animated{
        cursor: pointer;
        transition: transform .177s;
        animation: up-down .9s ease-in-out infinite alternate-reverse both;

    }
    .animated:hover{
        transform: scale(1.1);
    }
    .animated span{
        margin-right: 70px;
    }
    @keyframes up-down{
        0%{
            transform: translateY(20px);
        }
        100%{
            transform: translateY(-20px);
        }
    }
</style>

<body>
 <div class="container">
<div class="card">
        <div class="app-tital">
           <div class="animated infinite pulse">
             <span>PHP</span> <br> Calculator <br>
           </div>  
     </div>
    
    <div class="screen-body-item">
        <div class="app-from">
            <form method="POST">
                <div class="app-form-group">
                    <input type="text" class="app-form-control" placeholder="Enter Number" name="num1">
                </div>
                <div class="app-form-group">
                    <input type="text" class="app-form-control" placeholder="Enter Number" name="num2">
                </div>
                <div class="select-style">
                <select name="operation">
                <option value="" selected>Select</option>
                <option value="add">ADD</option>
                <option value="sub">SUB</option>
                <option value="div">DIV</option>
                <option value="mult">MULT</option>
                    </select>
                </div>
                <div>
                    <input type="submit" name="submit" value="submit" class="app-form-button">
                </div>
            </form>
        </div>
    </div>
    <div class="app-form-group showdata">
        <p>
        <?php 
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            if($num1=="" and $num2=="" and $operation=="add" or $operation=="sub" or $operation=="div" or $operation=="mult"){
                echo "please";
            }
            switch ($operation) {
                case 'sub':
                    $sum = $num1 - $num2;
                    echo "This is a value of 2 number of subtraction {$sum}";
                break;
                case 'div':
                    $sum = $num1 / $num2;
                    echo "This is a value of 2 number divition{$sum}";
                break;
                case 'mult':
                    $sum = $num1 * $num2;
                    echo "This is a value of 2 number multipliplication {$sum}";
                break;
                case 'add':
                    $sum = $num1 + $num2;
                    echo "This is a value of 2 number of sum{$sum}";
                break;
                default:
                    echo "";
                    
            }
        }
        
        
        ?>


        </p>
    </div>
</div>
</div>
</body>

</html>