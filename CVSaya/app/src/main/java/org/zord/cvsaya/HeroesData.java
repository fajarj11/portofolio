package org.zord.cvsaya;

import java.util.ArrayList;

public class HeroesData {
    public static String[][] data = new String[][]{
            {"Linear Layout", "Linear Layout is a group of views that aligns all children in one direction, vertically or horizontally. You can specify the direction of the layout with the attribute android: orientation.", "https://teknojurnal.com/wp-content/uploads/2016/02/Android-Studio-Logo.jpg"},
            {"Relative Layout", "RelativeLayout is a view group that displays child views in relative positions. The position of each view can be specified as relative to sibling elements (such as to the left-of or below another view) or in positions relative to the parent RelativeLayout area (such as aligned to the bottom, left or center).", "https://teknojurnal.com/wp-content/uploads/2016/02/Android-Studio-Logo.jpg"},
            {"Scrool View", "A view group that allows the view hierarchy placed within it to be scrolled. Scroll view may have only one direct child placed within it. To add multiple views within the scroll view, make the direct child you add a view group, for example LinearLayout, and place additional views within that LinearLayout.", "https://teknojurnal.com/wp-content/uploads/2016/02/Android-Studio-Logo.jpg"},
            {"Frame Layout", "FrameLayout is designed to block out an area on the screen to display a single item. Generally, FrameLayout should be used to hold a single child view, because it can be difficult to organize child views in a way that's scalable to different screen sizes without the children overlapping each other.", "https://teknojurnal.com/wp-content/uploads/2016/02/Android-Studio-Logo.jpg"},
            {"Navigation Drawer", "The Navigation Architecture Component includes a NavigationUI class. This class contains static methods that manage navigation with the top app bar, the navigation drawer, and bottom navigation.", "https://teknojurnal.com/wp-content/uploads/2016/02/Android-Studio-Logo.jpg"},
            {"Bottom Navigation", "The Navigation Architecture Component includes a NavigationUI class. This class contains static methods that manage navigation with the top app bar, the navigation drawer, and bottom navigation.", "https://teknojurnal.com/wp-content/uploads/2016/02/Android-Studio-Logo.jpg"},
            {"Fragment", "Fragments represent the behavior or part of the user interface in Activity. You can combine multiple fragments in one activity to build a multi-panel UI and reuse a fragment in several activities.", "https://teknojurnal.com/wp-content/uploads/2016/02/Android-Studio-Logo.jpg"},
            {"Button", "A user interface element the user can tap or click to perform an action.", "https://teknojurnal.com/wp-content/uploads/2016/02/Android-Studio-Logo.jpg"},
            {"Image View", "Displays image resources, for example Bitmap or Drawable resources. ImageView is also commonly used to apply tints to an image and handle image scaling.", "https://teknojurnal.com/wp-content/uploads/2016/02/Android-Studio-Logo.jpg"},
            {"Text View", "A user interface element that displays text to the user.", "https://teknojurnal.com/wp-content/uploads/2016/02/Android-Studio-Logo.jpg"},
            {"Cardview", "Apps often need to display data in similarly styled containers. These containers are often used in lists to hold each item's information.", "https://teknojurnal.com/wp-content/uploads/2016/02/Android-Studio-Logo.jpg"},
    };

    public static ArrayList<Hero> getListData(){
        ArrayList<Hero> list = new ArrayList<>();
        for (String[] aData : data){
            Hero hero = new Hero();
            hero.setName(aData[0]);
            hero.setFrom(aData[1]);
            hero.setPhoto(aData[2]);
            list.add(hero);
        }
        return list;
    }
}
