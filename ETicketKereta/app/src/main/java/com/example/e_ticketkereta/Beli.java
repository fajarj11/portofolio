package com.example.e_ticketkereta;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.Spinner;
import android.widget.Toast;

public class Beli extends AppCompatActivity implements View.OnClickListener {
    Button pesan;
    EditText et_nama, et_ktp, et_asal, et_tujuan;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_beli);

        pesan = findViewById(R.id.beli);
        et_nama = findViewById(R.id.nama);
        et_ktp = findViewById(R.id.ktp);
        et_asal = findViewById(R.id.asal);
        et_tujuan = findViewById(R.id.tujuan);


        pesan.setOnClickListener(this);

    }

    @Override
    public void onClick(View view) {
        if (et_nama.getText().toString().isEmpty()) {
            Toast.makeText(this, "Mohon Isi Nama Pemesan", Toast.LENGTH_SHORT).show();
        }
        if (et_ktp.getText().toString().isEmpty()) {
            Toast.makeText(this, "Mohon Isi No. KTP", Toast.LENGTH_SHORT).show();
        }
        if (et_asal.getText().toString().isEmpty()) {
            Toast.makeText(this, "Mohon Isi Stasiun Asal", Toast.LENGTH_SHORT).show();
        }
        if (et_tujuan.getText().toString().isEmpty()) {
            Toast.makeText(this, "Mohon Isi Stasiun Tujuan", Toast.LENGTH_SHORT).show();
        }
        else {

            String nama = et_nama.getText().toString();
            String ktp = et_ktp.getText().toString();
            String asal = et_asal.getText().toString();
            String tujuan = et_tujuan.getText().toString();
            Intent intent = new Intent(this, Cetak.class);
            intent.putExtra(Cetak.EXTRA_NAME, nama);
            intent.putExtra(Cetak.EXTRA_KTP, ktp);
            intent.putExtra(Cetak.EXTRA_ASAL, asal);
            intent.putExtra(Cetak.EXTRA_TUJUAN, tujuan);
            startActivity(intent);
        }
    }
}
