<?php include 'inc/header.php'; ?>
    <div class="container">
        <section id="main">
            <h2>Payments</h2>
            <div class="login-page">
                <div class="form">
                    <form class="login-form">
                    <label><h4>Pay to GMDJ Company Ltd with</h4></label>
                    <button type="button" onclick="showa()">Airtel Money</button>
                    <div id="airtel"  style="display:none;" >
                    <h4>For Airtel</h4>
                    <p>1. *150*60#</p>
                    <p>2. Chagua 5 (lipa bili)</p>
                    <p>3. Chagua4 (weka namba ya kampuni)</p>
                    <p>4. Andika namba ya biashara(avigrow)</p>
                    <p>5. Weka namba ya siri na ulipie</p>
                    </div>
                    <button type="button" onclick="showe()">M-Pesa</button>
                    <div id="voda"  style="display:none;" >
                    <h4>For Vodacom </h4>
                    <p>1. *149*03#</p>
                    <p>2. Chagua 5 (lipa bili)</p>
                    <p>3. Chagua4 (weka namba ya kampuni)</p>
                    <p>4. Andika namba ya biashara</p>
                    <p>5. Weka namba ya siri na ulipie</p>
                    </div>
                    <button type="button" onclick="showi()">Tigo Pesa</button>
                    <div id="tigo"  style="display:none;" >
                    <h4>For Tigo</h4>
                    <p>1. *150*01#</p>
                    <p>2. Chagua 5 (lipa bili)</p>
                    <p>3. Chagua4 (weka namba ya kampuni)</p>
                    <p>4. Andika namba ya biashara</p>
                    <p>5. Weka namba ya siri na ulipie</p>
                    </div>
                    <button type="button" onclick="showo()">Halopesa</button>
                    <div id="halotel"  style="display:none;" >
                    <h4>For Halotel</h4>
                    <p>1. *149*66#</p>
                    <p>2. Chagua 5 (lipa bili)</p>
                    <p>3. Chagua4 (weka namba ya kampuni)</p>
                    <p>4. Andika namba ya biashara</p>
                    <p>5. Weka namba ya siri na ulipie</p>
                    </div>
                    
                    
                </div>
            </div>
        </section>
    </div>


    <script>
    
   function showa(){
    var x = document.getElementById("airtel");
         x.style.display="block";

         
   }


   function showe(){
    var x = document.getElementById("voda");
         x.style.display="block";
         
   }
   function showi(){
    var x = document.getElementById("tigo");
         x.style.display="block";
         
   }
   function showo(){
    var x = document.getElementById("halotel");
         x.style.display="block";
         
   }
 
  
  
    </script>
<?php include 'inc/footer.php'; ?>