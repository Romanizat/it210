<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="/">
        <html>
            <head>
            </head>
                <body>
                    <h2>Studenti</h2>
                        <table border="1">
                            <tr bgcolor="red">
                                <th align="left">Ime</th>
                                <th align="left">Prezime</th>
                                <th align="left">Starost</th>
                                <th align="left">Ocena</th>
                                <th align="left">Sifra</th>
                            </tr>
                            <xsl:for-each select="/studenti/student[ocena>5 or starost>22]">
                                <tr bgcolor="lightblue">
                                    <td>
                                        <xsl:value-of select="ime" />
                                    </td>
                                    <td>
                                        <xsl:value-of select="prezime" />
                                    </td>
                                    <td>
                                        <xsl:value-of select="starost" />
                                    </td>
                                    <td>
                                        <xsl:value-of select="ocena" />
                                    </td>
                                    <td>
                                        <xsl:value-of select="sifra" />
                                    </td>
                                </tr>
                            </xsl:for-each>
                        </table>

                    <h2>Najmladji student</h2>
                        <xsl:for-each select="studenti/student">
                            <xsl:sort select="starost" data-type="number" order="ascending"/>
                                <xsl:if test="position() = 1">
                                    <table border="1">
                                        <tr bgcolor="red">
                                            <th>Ime</th>
                                            <th>Prezime</th>
                                            <th>Starost</th>
                                            <th>Ocena</th>
                                            <th>Sifra</th>
                                        </tr>
                                        <tr bgcolor="lightblue">
                                            <td>
                                                <xsl:value-of select="ime" />
                                            </td>
                                            <td>
                                                <xsl:value-of select="prezime" />
                                            </td>
                                            <td>
                                                <xsl:value-of select="starost" />
                                            </td>
                                            <td>
                                                <xsl:value-of select="ocena" />
                                            </td>
                                            <td>
                                                <xsl:value-of select="sifra" />
                                            </td>
                                        </tr>
                                    </table>           
                                </xsl:if>
                        </xsl:for-each>

                    <h2>Najstariji student</h2>
                        <xsl:for-each select="studenti/student">
                            <xsl:sort select="starost" data-type="number" order="descending"/>
                                <xsl:if test="position() = 1">
                                    <table border="1">
                                        <tr bgcolor="red">
                                            <th>Ime</th>
                                            <th>Prezime</th>
                                            <th>Starost</th>
                                            <th>Ocena</th>
                                            <th>Sifra</th>
                                        </tr>
                                        <tr bgcolor="lightblue">
                                            <td>
                                                <xsl:value-of select="ime" />
                                            </td>
                                            <td>
                                                <xsl:value-of select="prezime" />
                                            </td>
                                            <td>
                                                <xsl:value-of select="starost" />
                                            </td>
                                            <td>
                                                <xsl:value-of select="ocena" />
                                            </td>
                                            <td>
                                                <xsl:value-of select="sifra" />
                                            </td>
                                        </tr>
                                    </table>           
                                </xsl:if>
                        </xsl:for-each>

                </body>
        </html>
    </xsl:template>
</xsl:stylesheet>