package org.zord.cvsaya;

import android.content.Intent;
import android.support.annotation.NonNull;
import android.support.design.widget.NavigationView;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.GridLayoutManager;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.Menu;
import android.view.MenuItem;

import java.util.ArrayList;

public class AppsInfo extends AppCompatActivity implements NavigationView.OnNavigationItemSelectedListener{
    private RecyclerView rvHero;
    private ArrayList<Hero> list = new ArrayList<>();
    DrawerLayout drawer;
    NavigationView navigationView;
    ActionBarDrawerToggle toggle;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_apps_info);

        rvHero = findViewById(R.id.rv_hero);
        rvHero.setHasFixedSize(true);

        list.addAll(HeroesData.getListData());
        showRecyclerList();

        drawer = findViewById(R.id.drawer);
        navigationView = findViewById(R.id.nav_view);
        toggle = new ActionBarDrawerToggle(this, drawer, R.string.navigation_drawer_open, R.string.navigation_drawer_close);
        drawer.addDrawerListener(toggle);
        toggle.syncState();
        navigationView.setNavigationItemSelectedListener(this);

        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        getSupportActionBar().setTitle("Apps Info");
    }

    private void showRecyclerList() {
        rvHero.setLayoutManager(new LinearLayoutManager(this));
        ListHeroAdapter listHeroAdapter = new ListHeroAdapter(list);
        rvHero.setAdapter(listHeroAdapter);
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        if (toggle.onOptionsItemSelected(item)){
            return true;
        }
        return super.onOptionsItemSelected(item);
    }

    @SuppressWarnings("StatementWithEmptyBody")
    @Override
    public boolean onNavigationItemSelected(MenuItem item) {
        // Handle navigation view item clicks here.
        int id = item.getItemId();

        switch (id){
            case R.id.nav_about:
                Intent intent1 = new Intent(AppsInfo.this, pendidikan.class);
                startActivity(intent1);
                break;
            case R.id.nav_portofolio:
                Intent intent2 = new Intent(AppsInfo.this, Portofolio.class);
                startActivity(intent2);
                break;
            case R.id.nav_skill:
                Intent intent3 = new Intent(AppsInfo.this, Skill.class);
                startActivity(intent3);
                break;
            case R.id.nav_experience:
                Intent intent4 = new Intent(AppsInfo.this, Experience.class);
                startActivity(intent4);
                break;
            case R.id.nav_home:
                Intent intent5 = new Intent(AppsInfo.this, MainActivity.class);
                startActivity(intent5);
                break;
        }

        DrawerLayout drawer = findViewById(R.id.drawer);
        drawer.closeDrawer(GravityCompat.START);
        return true;
    }
}
