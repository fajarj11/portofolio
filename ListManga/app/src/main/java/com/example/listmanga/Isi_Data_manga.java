package com.example.listmanga;

import java.util.ArrayList;

public class Isi_Data_manga {
    public static String[][] data = new String[][]{
            {"Berserk", "Aug 1989 -", "https://cdn.myanimelist.net/r/50x70/images/manga/1/157931.webp?s=00f3f9be0895815367e3172c275dc4a3"},
            {"Jojo no Kimyou na Bouken Part 7: Steel Ball Run", "Jan 2004 - Apr 2011", "https://cdn.myanimelist.net/r/50x70/images/manga/3/179882.webp?s=f68700b15374734b10ad35b411f27715"},
            {"Fullmetal Alchemist", "Jul 2001 - Sep 2010", "https://cdn.myanimelist.net/r/50x70/images/manga/1/27600.webp?s=8ea8839a35f5fa45d641f35b04a90d10"},
            {"One Piece", "Jul 1997 -", "https://cdn.myanimelist.net/r/50x70/images/manga/3/55539.webp?s=e7fa6136d6c70c20b28a6b7908391ba3"},
            {"Monster", "Dec 1994 - Dec 2001", "https://cdn.myanimelist.net/r/50x70/images/manga/3/54525.webp?s=1fe8e2d605a3d5d0c6e96264b995cf24"},
            {"Oyasumi Punpun", "Mar 2007 - Nov 2013", "https://cdn.myanimelist.net/r/50x70/images/manga/3/164420.webp?s=29401144d57de701a2c52397cbb5f749"},
            {"Vagabond", "Mar 1999 - May 2015", "https://cdn.myanimelist.net/r/50x70/images/manga/2/181787.webp?s=596f24ed2e53279f4bd07ec1fe09a8dc"},
            {"Kingdom", "Jan 2006 -", "https://cdn.myanimelist.net/r/50x70/images/manga/2/171872.webp?s=b04558179bdcdd478fc20b42a5b5dc3f"},
            {"Grand Blue", "Apr 2014 -", "https://cdn.myanimelist.net/r/50x70/images/manga/2/166124.webp?s=ed0158fbd391f52623459e351f823321"},
    };

    public static ArrayList<Data_Manga> getListData() {
        ArrayList<Data_Manga> list = new ArrayList<>();
        for (String[] aData : data){
            Data_Manga data_manga = new Data_Manga();
            data_manga.setJudul(aData[0]);
            data_manga.setTanggal(aData[1]);
            data_manga.setPhoto(aData[2]);
            list.add(data_manga);
        }
        return list;
    }
}
