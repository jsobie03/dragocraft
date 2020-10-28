<?php include('includes/header.php'); ?>
<body>
  <!-- Navigation -->
<?php include('includes/nav.php'); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/guardianblog_img1.png');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>Setting Up Your Own Minecraft Server</h1>
            <h2 class="subheading">How to Set Up Your Minecraft Server</h2>
            <span class="meta">Posted by
              <a href="guardian-post.php">Guardian</a>
              on August 14, 2020</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article class="blogs">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 mx-auto" style="padding: 140px;">
            <h1 style="font-size: 3.5em; font-weight: bolder; color: black; text-decoration: underline!important; text-align: center;">Starting Your Own Minecraft Server</h1>
          <img src="img/bg9.png" alt="minecraft server photo" width="100%" />
            <p>Minecraft has sold over 100 million copies worldwide. Kids and adults everywhere are mining, crafting, and Minecrafting together in multiplayer worlds; players build social skills, improve their problem-solving abilities, and exercise their creativity when building together online. There are so many educational benefits of Minecraft it’s astounding.</p>
            
            <img src="img/guardianblog_img2.png" style="float: left; clear: both; margin-right: 20px; width: 500px; height: auto;"/>
          <p>On a public internet server, players can collaborate to build bigger and better things than they could have made alone; however, you can’t control exactly who connects to the public servers and thus who your child is interacting with online.</p>

          <p>Good news! By setting up your own server, you can know exactly who’s connecting with and playing in your child’s worlds. We created some downloadable directions to get you started hosting your own Minecraft server for your student. These were created using iD Game Plan, the same learning management system that students use at camp.</p>

          <h2 class="section-heading">First, Importantly...</h2>
<img src="img/dragon2.png" style="float: right; clear: both; margin-left: 20px; width: 500px; height: auto;"/>
          <p>Before you try to do any of this at home, these instructions are meant for parents who are helping their kids. Thus, kids MUST get parent permission and choose a time when they can supervise and help. Setting up and running an online server means that anyone with your external IP address will be able to join your server and play in your Minecraft world. Think carefully about who you invite to play on your server!</p>
  
          <p>Make sure you’re keeping track of who you and your child are inviting to play on your server. The best way to keep your server safe and happy is to only invite players you know in real life. Plenty of people on the internet are nice, but by limiting your server to people you’ve met, you won’t have any surprises with who your kids are encountering.</p>
            
          <h2 class="section-heading">PC Setup Instructions:</h2>
            <ol>
                <li style="text-decoration: underline; color: #8b0000; font-size: 1.5em; font-weight: bolder; ">Verifying the Latest Version of Java</li>
                <p>Since Minecraft is a Java-based game, our first step is to make sure you have the latest version of Java. If you don't, <a href="https://java.com/en/download/" target="_blank">download Java here</a>.</p>
                
                <p><em><strong>Need Help Troubleshooting?</strong></em></p> 
                <p><em>Refer to the <a href="https://minecraft.gamepedia.com/Tutorials/Setting_up_a_server" target="_blank">Minecraft online server set up Wiki article</a>. PLEASE NOTE: Some solutions to server issues require adjusting critical settings on your computer. If this is done improperly, you can damage your computer.</em></p>
                <li style="text-decoration: underline; color: #8b0000; font-size: 1.5em; font-weight: bolder; ">Minecraft_Server.jar</li>
                    <p>First, you'll need the server files. You can get these for free from Mojang's site:</p>
                        <ol>
                            <li>Go to the <a href="https://minecraft.net/en-us/download/server" target="_blank">Minecraft Server Downloads page</a> and download minecraft_server.1.11.jar.</li> 
                            <li>Once the download finishes, copy minecraft_server.1.11.jar into a new folder on your desktop and call this folder "Minecraft Server".</li> 
                            <li>Double-click minecraft_server.1.11.jar to run it.</li>
                        </ol>
                    <p>You'll see some new files appear in the folder along with it.</p>
                <li style="text-decoration: underline; color: #8b0000; font-size: 1.5em; font-weight: bolder; ">Version of Minecraft</li>
                    <p>If Minecraft updates to a new version, the directions above will still apply but "1.11" will be replaced with whatever the new version number is!</p>
                <li style="text-decoration: underline; color: #8b0000; font-size: 1.5em; font-weight: bolder; ">Batch File to Run Server</li>
                    <ol>
                        <li>Right-click inside the Server folder where you put the Minecraft_Server.1.11.jar.</li>
                        <li>Select New > Text Document.</li>
                        <li>Name the new document "Run".</li>
                        <li>Inside the Notepad document, paste the following line: 1 cmd /k java ‐Xms1G ‐Xmx1G ‐jar minecraft_server.1.11.jar</li>
                      <br/>
                        <p><em><strong>Important!! </strong></em> If you're using a different version of the server, change "minecraft_server.1.11.jar" to match the name of the version you're using.</p>
                      
                <p>Now Save As a batch file, which is a file Windows uses to run command line commands. </p>
                        <li>Click File > Save As.</li>
                        <li>In the field Save as Type, select All Files. </li>
                        <li>Set the file name to "Run.bat".</li>
                </ol>
                <p><em>Important</em> Make sure you remove the .txt at the end of the filename.</p>
            <li style="text-decoration: underline; color: #8b0000; font-size: 1.5em; font-weight: bolder; ">Agreeing to the EULA</li>
                <p>Mojang provides a license agreement you must agree to before launching a Minecraft server. You'll need to edit the file eula.txt to indicate that you agree.</p> 
                    <ol>
                    <li>Double-click eula.txt</li>
                        <p>You can <a href="https://account.mojang.com/documents/minecraft_eula" target="_blank">read the EULA here</a> or by copying and pasting the text from the file.</p>
                    <li>Change the line eula=false to eula=true.</li>
                </ol>
                <li style="text-decoration: underline; color: #8b0000; font-size: 1.5em; font-weight: bolder; ">Launching Your Server</li>
                <p>Now you're ready to launch your server!</p>

                <p>Double-click Run.bat and your server will launch.</p>

                <p>A window will appear with some info about your server. As long as you leave this window open, your server is running and players will be able to connect!</p>
                <li style="text-decoration: underline; color: #8b0000; font-size: 1.5em; font-weight: bolder; ">The Server Window</li>

                <p>Your server provides some information to help you keep track of what's going on, even if you're not in-game.</p> 
                    <ol>
                        <li>You can see how much memory the server is using in the Stats panel.</li>
                        <li>You can check who is currently connected to the server in the Players panel.</li>
                        <li>You can see server messages and player chats in the Log and Chat panel. </li>
                        <li>You can use the field on the bottom-right to enter server commands.</li>
                    </ol>
                <p><em><strong>Server Commands</strong></em>
                    Server commands allow advanced users more control over their server. You can find a list of all possible commands <a href="https://minecraft.gamepedia.com/Commands" target="_blank">here</a>.</p>
                <li style="text-decoration: underline; color: #8b0000; font-size: 1.5em; font-weight: bolder; ">Joining Your Server</li> 
<p>
    Now it's time to join your Minecraft server. </p>
                <ol>
                    <li>Run Minecraft.</li>
                    <li>On the main menu, click Multiplayer.</li>
                    <li>Click Add Server.</li> 
                    <li>Name your server in the Server Name field.</li> 
                    <li>Type "localhost" in the Server Address field.</li> 
                    <li>Click Done.</li> 
                    <li>Select your server and click Join Server.</li> 
                </ol>
                <p>You should now be able to play on your home server. Next, we'll set up the internet connection so other players can connect to it.</p>
    <li style="text-decoration: underline; color: #8b0000; font-size: 1.5em; font-weight: bolder; ">Port Forwarding</li>
                <p>The next step in the process requires adjusting the settings on your router so other users can access your computer through it. This process will be different for everyone, because it's based on the kind of router you have.</p>
                <ol>
                    <li>Before you begin, <a href="https://portforward.com/help/portforwarding.htm" target="_blank">read this page on portforward.com</a> that offers some basic information on port forwarding.</li>
                    <li>Go to <a href="https://portforward.com/router.htm" target="_blank">this link</a> for a list of port forwarding guides.</li>
                    <li>Select your router's make and model from the list and follow the instructions provided.</li>
                </ol>
                <p><em><strong>Is Your Router Not on the List?</strong></em></p>
<p>If you can't find your router on the list on that site here's a couple things to try:

    If you can find your manufacturer but not the model: Try the directions for the closest number to your model you can find. They're often similar processes. 
    Search for your router's model and "port forwarding" on the web. 
    Contact your router's customer support and ask how to forward ports.</p>
                
                <li style="text-decoration: underline; color: #8b0000; font-size: 1.5em; font-weight: bolder; ">Finding Your External IP Address</li>

                <p>Once you've forwarded your ports, you'll need to find your external IP.</p> 
                    <ol>
                        <li>Open a browser and go to google.com</li>
                        <li>Type "external ip" in the search bar and press Enter or Return.</li> 
                        <li>Google will tell you your external IP address.</li>
                </ol>
                <p>Your external IP address will either be IPv4 or IPv6 and will look like one of the examples below:</p> 

                <p>Sample IPv4 address: 12.34.456.789</p>
                <p>Sample IPv6 address: 2001:0db8:0a0b:12f0:0000:0000:0000:0001</p> 

                <p>When you find your external IP address, save this number — you'll need it for other people to connect to your server.</p>
                
                <li style="text-decoration: underline; color: #8b0000; font-size: 1.5em; font-weight: bolder; ">Connecting to Your Server</li> 

                <p>Now that you've port-forwarded your connection, other players can connect using your external IP address. Have players joining your server follow the steps below:</p> 
                <ol>
                    <li>In Minecraft, click Multiplayer.</li>
                    <li>Click Add Server.</li>
                    <li>Enter a server name.</li>
                    <li>Enter the server address.</li>
                
                <p>This will be your external IP followed by the port number: 25565 This will look like the address in the image on the right.</p>

                <p>If you have an IPv6 address, enclose your address in [ ] characters like this: [2001:0db8:0a0b:12f0:0000:0000:0000:0001]:25565</p>

                    <li>Click Done. Minecraft will now try to connect to the server. Once connected, select the server and click Join Server.</li>
                </ol>

<p><em><strong>Inviting Players to Join</strong></em></p>
                <p>Anyone you give your external IP address to will be able to play on your Minecraft server. Make sure that you trust whomever you invite to play. It's safest only to invite people you know. Ask your parents before inviting new players to join.</p>

                <li style="text-decoration: underline; color: #8b0000; font-size: 1.5em; font-weight: bolder; ">Server.properties File</li>

                <p>You can also adjust some settings of the game using the file in the Server folder called Server.properties.</p> 

                <p>Open the file with any text editor, and you can change the properties of your Minecraft world by editing lines of the file.</p>

                <p>The most common properties you might change are:</p> 
                <ul>
                    <li>gamemode=0: change this to gamemode=1 to put your server in creative mode.</li> 
                    <li>max‐players=20: change this number to increase or decrease the number of players that can join your server at one time.</li> 
                </ul>
                
                <p>You can find a reference for all the options available on the <a href="https://minecraft.gamepedia.com/Server.properties" target="_blank">Minecraft Wiki</a>.</p>
                <p><strong><em>Editing Server Properties</em></strong></p> 
                <p><em>You won't need to change anything in this file for your server to work. Don't make changes to the file unless you're sure of what you're doing.</em></p>
          <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>
</ol>
     <h2 class="section-heading">RECAP</h2>

<p>Always ask your parents for permission before you start setting up an online server! 
    You must download the server software from Minecraft and use port forwarding to allow others access to your server.</p>

                <p><em><strong>Try This!</strong></em></p> 
            <p><em>Don't forget that you can double-check steps and get more information on setting up servers <a href="https://minecraft.gamepedia.com/Tutorials/Setting_up_a_server" target="_blank">here.</a></em></p>

            <p>For those with a mac, you can find instructions <a href="https://2018media.idtech.com/legacy/blog/content/2017/02/Minecraft-Server-Creation-Mac.pdf" target="_blank">here.</a></p>

                <p>Once you’ve followed these directions, you’ll have your own Minecraft server that you, your kids, and their friends can play on together! You can give your connection information to anyone you know and invite them to collaborate and build in your world.</p>

                <p>When you do create a server, be sure to log in every once in awhile to check out what the players are building; you’ll be surprised how much kids will accomplish when they work together. If you or your kids have any cool builds, we’d love to see them in the comments!</p>
            
      
          <p>Blog Text Written By
            <a href="http://jonsobier.com/SobierPortfolio" target="_blank">J/S Web Development</a>. Photographs by
            <a href="https://www.idtech.com/blog/author/id-tech" target="_blank">iDTech</a>.</p>
        </div>
      </div>
    </div>
  </article>

  <hr>

  <!-- Footer -->
    <?php include('includes/footer.php'); ?>
    
  <!-- Bootstrap core JavaScript -->
  <script src="js/vendor/jquery-1.11.0.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.js"></script>
</body>
</html>
