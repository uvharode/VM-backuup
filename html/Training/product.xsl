<?cml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0 xmlns:xsl="https://www.w3/org/1999/XSL/Transform">
<xsl:template match="/">
<html>

<body>
    <h2>Producr Details</h2>
    <table border="1">
    <tr bgcolor = "#9acd43">
        <th>product Name</th>
        <th>Discription</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
    <xsl:for-each select=""PRODUCTDATA/PRODUCT>
    <xsl:sort select="PRICE"/>
    <tr>
    <td><xsl:value-of select="DESCRIPTION"/></td>
    <td><xsl:value-of select="PRODUCTNAME"/></td>
    <td><xsl:value-of select="PRICE"/></td>
    <td><xsl:value-of select="QUANTITY"/></td>
    </tr>

    </xcl:for-each>
    </table>
</html>
</xsl:template>
</xdl:stylesheet>
</body>

</html>
</xsl:template>
</xsl:stylesheet>