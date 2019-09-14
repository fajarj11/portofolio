package com.example.listmanga;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {
    RecyclerView rvData;
    private ArrayList<Data_Manga> list = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        rvData = findViewById(R.id.rv_manga);
        rvData.setHasFixedSize(true);

        list.addAll(Isi_Data_manga.getListData());
        showRecyclerList();

    }

    private void showRecyclerList() {
        rvData.setLayoutManager(new LinearLayoutManager(this));
        ListMangaAdapter listMangaAdapter = new ListMangaAdapter(list);
        rvData.setAdapter(listMangaAdapter);
    }

}
