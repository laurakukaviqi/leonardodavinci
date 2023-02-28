<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <body>
	<form method="post" action="deleteStudent.php">
		Kursi/Programi<br>
		<select name="kursi">
        <option value="" disabled selected></option>
            <option value="c">C</option>
            <option value="cpp">C++</option>
            <option value="java">JAVA</option>
            <option value="visualstudio">VISUAL STUDIO</option>
            <option value="oracleDB">ORACLE DATABASE</option>
            <option value="webprogramming">PROGRAMIM WEB-I</option>
            <option value="webDesign">DIZENJIM WEBI</option>
            <option value="mysql">MYSQL</option>
            <option value="linux">LINUX</option>
            <option value="windows10">WINDOWS 10</option>
            <option value="windowsServer">WINDOWS SERVER</option>
            <option value="algoritma">ALGORITMA</option>
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
            <option value="3dsMax">3Ds MAX</optio n>
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
            <option value="specialistit">Specialist IT</option>
            <option value="graphicdesign">Graphic Design</option>
            <option value="interiordesign">Dizenjues i brendshëm</option>
            <option value="webdeveloper">Zhvillues web-i</option>
            <option value="specialistelektrik">Specialist elektrik</option>
            <option value="hvac">HVAC</option>
            <option value="cisco">CISCO</option>
            <option value="softwaredeveloper">Zhvillues software</option>
            <option value="mobileridheperpunimdruri">Mobileri dhe përpunim druri</option>
            <option value="teknikkompjuteri">Teknik kompjuteri</option>
        </select>
		<br>
		Emri<br>
		<input type="text" name="emri">
		<br>
		Mbiemri:<br>
		<input type="text" name="mbiemri">
		<br>
		Username:<br>
		<input type="text" name="username">
		<br><br>

		<br><br>
		<input type="submit" name="save" value="FSHI">
	</form>
  </body>
</html>