<?xml version="1.0"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0">
<xsl:template match="/">

<html>
<head>
<style>
table{
background: #eee;
border: 1px #000 solid;
font-family: sans-serif;
font-size: 14px;
}
td{
padding:10px;
border: 1px solid #000;
}
th{
padding:10px;
border: 1px solid #000;
text-align: left;
}
</style>
</head>
<body>
<table>
<tr>
<th>Name</th>
<th>Gender</th>
<th>Age</th>
<th>Location</th>
</tr>
<xsl:for-each select="people/person">
<tr>
<td>
<xsl:value-of select="name"/>
</td>
<td>
<xsl:value-of select="gender"/>
</td>
<td>
<xsl:value-of select="age"/>
</td>
<td>
<xsl:value-of select="location"/>
</td>
</tr>
</xsl:for-each>
</table>
</body>
</html>

</xsl:template>
</xsl:stylesheet>

