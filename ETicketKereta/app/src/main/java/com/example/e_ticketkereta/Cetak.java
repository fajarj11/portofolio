package com.example.e_ticketkereta;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.TextView;

public class Cetak extends AppCompatActivity {
    public static final String EXTRA_NAME = "extra_name";
    public static final String EXTRA_KTP = "extra_ktp";
    public static final String EXTRA_ASAL = "extra_asal";
    public static final String EXTRA_TUJUAN = "extra_tujuan";

    TextView nama, ktp, asal, tujuan;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cetak);

        nama = findViewById(R.id.tv_nama);
        ktp = findViewById(R.id.tv_ktp);
        asal = findViewById(R.id.tv_asal);
        tujuan = findViewById(R.id.tv_tujuan);

        String c_nama = getIntent().getStringExtra(EXTRA_NAME);
        String c_ktp = getIntent().getStringExtra(EXTRA_KTP);
        String c_asal = getIntent().getStringExtra(EXTRA_ASAL);
        String c_tujuan = getIntent().getStringExtra(EXTRA_TUJUAN);

        nama.setText("Nama : " + c_nama);
        ktp.setText("No. KTP : " + c_ktp);
        asal.setText("Stasiun Awal : " + c_asal);
        tujuan.setText("Stasiun Tujuan : " + c_tujuan);
    }
}
