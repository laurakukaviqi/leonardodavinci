<!DOCTYPE html>
<html>
    <head>
    <style>
        body {
          margin: 0x;
          font-family: Arial, Helvetica, sans-serif;
          background-color: rgba(168, 210, 241, 0.8);
        }
        #kursi{
          position: absolute;
          top: 190px;
          left: 340px;
      }
      #programi{
          position: absolute;
          top: 270px;
          left: 450px;
      }
      button {
          position: absolute;
          top: 270px;
          left: 850px;
      }
      h2{
          position: absolute;
          top: 60px;
          left: 400px;
      }
      video{
          position: absolute;
          top: 350px;
          left: 100px;
      }
    </style>
    </head>
    <body>
      <h2 style="text-shadow: 2px 2px 5px red; text-transform: uppercase; font-family: 'Lucida Console', 'Courier New', monospace;">Zgjidhni kursin/programin ku merrni pjesë!!</h2>
      <form id="kursi" action="phpProfesori.php" method="post">
        <label style="text-shadow: 2px 2px 5px blue; font-family: 'Lucida Console', 'Courier New', monospace;">Zgjidh tipin e kursit:</label>
        <select name="tipi" id="tipi" style=" border-style: dotted; border-color: red; border-width: 3px;">
            <option value="it">IT</option>
            <option value="inxh">INXHINIERIKE</option>
            <option value="gra">GRAFIKE</option>
            <option value="eko">EKONOMIKE</option>
            <option value="gju">GJUHE TE HUAJA</option>
        </select>

        <label style="text-shadow: 2px 2px 5px blue; font-family: 'Lucida Console', 'Courier New', monospace;">Zgjidh kursin:</label>
        <select name="kursi" style=" border-style: dotted; border-color: red; border-width: 3px;">
            <option value="" disabled selected></option>
            <option value="c">C</option>
            <option value="c++">C++</option>
            <option value="java">JAVA</option>
            <option value="visualstudio">VISUAL STUDIO</option>
            <option value="oracledatabase">ORACLE DATABASE</option>
            <option value="webprogramming">PROGRAMIM WEB-I</option>
            <option value="webdesign">DIZENJIM WEBI</option>
            <option value="mysql">MYSQL</option>
            <option value="linux">LINUX</option>
            <option value="windows10">WINDOWS 10</option>
            <option value="windowsserver">WINDOWS SERVER</option>
            <option value="algoritma">ALGORTMA</option>
            <option value="datastructure">STRUKTURE TE DHENASH</option>
            <option value="sistememultimediale">SISTEME MULTIMEDIALE</option>
            <option value="arkitekturekompjuterike">ARKITEKTURE KOMPJUTERIKE</option>
            <option value="autocad2D">AUTOCAD 2D</option>
            <option value="autocad3D">AUTOCAD 3D</option>
            <option value="rhinoceros">RHINOCEROS</option>
            <option value="archicad">ARCHICAD</option>
            <option value="sap2000">SAP 2000</option>
            <option value="etabs">ETABS</option>
            <option value="watercad">WATERCAD</option>
            <option value="arkitekturerevit">REVIT ARKITEKTURAL</option>
            <option value="revitstruktural">REVIT STRUKTURAL</option>
            <option value="civil3D">CIVIL 3D</option>
            <option value="gjeometrideskriptive">GJEOMETRI DESKRIPTIVE</option>
            <option value="vizatimteknik">VIZATIM TEKNIK</option>
            <option value="autocadmap">AUTOCAD MAP</option>
            <option value="gis">GIS</option>
            <option value="cadcam">CAD CAM</option>
            <option value="fotografi">FOTOGRAFI</option>
            <option value="photoshop">PHOTOSHOP</option>
            <option value="adobepremiere">ADOBE PREMIERE</option>
            <option value="adobeaftereffect">ADOBE AFTER EFFECT</option>
            <option value="adobeaudition">ADOBE AUDITION</option>
            <option value="correldraw">CORREL DRAW</option>
            <option value="adobeillustrator">ADOBE ILLUSTRATOR</option>
            <option value="3dsmax">3Ds MAX</option>
            <option value="maya">MAYA</option>
            <option value="cinema4D">CINEMA 4D</option>
            <option value="adobeindesign">ADOBE INDESIGN</option>
            <option value="zbrush">Z-BRUSH</option>
            <option value="financa5">FINANCA 5</option>
            <option value="kontabilitetalpha">KONTABILITET ALPHA</option>
            <option value="eviews">E-VIEWS</option>
            <option value="quickbook">QUICK BOOK</option>
            <option value="ecommerce">E-COMMERCE</option>
            <option value="advancedexcel">EXCEL I AVANCUAR</option>
            <option value="access">ACCESS</option>
            <option value="spss">SPSS</option>
            <option value="anglisht">ANGLISHT</option>
            <option value="frengjisht">FRENGJISHT</option>
            <option value="gjermanisht">GJERMANISHT</option>
            <option value="italisht">ITALISHT</option>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>

        <div id="programi">
        <label style="text-shadow: 2px 2px 5px blue; font-family: 'Lucida Console', 'Courier New', monospace;">Zgjidh programin:</label>
        <select name="programi" style=" border-style: dotted; border-color: red; border-width: 3px;">
            <option value="it">Specialist IT</option>
            <option value="inxh">Graphic Design</option>
            <option value="gra">Dizenjues i brendshëm</option>
            <option value="eko">Zhvillues web-i</option>
            <option value="gju">Specialist elektrik</option>
            <option value="gju">HVAC</option>
            <option value="gra">CISCO</option>
            <option value="eko">Zhvillues software</option>
            <option value="gra">Mobileri dhe përpunim druri</option>
            <option value="eko">Teknik kompjuteri</option>
        </select>
        </div>
        <form action="logout.php" method="POST">
        <button>Log out</button>
      </form>
      <video width="1200" height="400" controls id="video">
            <source src="video/motivationLecturer.mp4" type="video/mp4">
          </video>
    </body>
</html>