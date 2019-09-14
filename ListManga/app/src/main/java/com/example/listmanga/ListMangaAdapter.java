package com.example.listmanga;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;

import java.util.ArrayList;

public class ListMangaAdapter extends RecyclerView.Adapter<ListMangaAdapter.ListViewHolder> {
    private ArrayList<Data_Manga> lisManga;

    public ListMangaAdapter(ArrayList<Data_Manga> list) {
        this.lisManga = list;
    }


    @NonNull
    @Override
    public ListViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.item_manga, parent, false);
        return new ListViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull final ListViewHolder holder, int position) {
        final Data_Manga data_manga =lisManga.get(position);
        Glide.with(holder.itemView.getContext()).load(data_manga.getPhoto())
                .apply(new RequestOptions()).override(60, 60)
                .into(holder.imgPhoto);

        holder.tvJudul.setText(data_manga.getJudul());
        holder.tvTanggal.setText(data_manga.getTanggal());
        holder.btnFavorite.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Toast.makeText(holder.itemView.getContext(), "Favorite " + data_manga.getJudul(), Toast.LENGTH_SHORT).show();
            }
        });
    }

    @Override
    public int getItemCount() {
        return lisManga.size();
    }

    public class ListViewHolder extends RecyclerView.ViewHolder {
        ImageView imgPhoto;
        TextView tvJudul, tvTanggal;
        Button btnFavorite;
        public ListViewHolder(@NonNull View itemView) {
            super(itemView);
            imgPhoto = itemView.findViewById(R.id.img_photo);
            tvJudul = itemView.findViewById(R.id.tv_judul);
            tvTanggal = itemView.findViewById(R.id.tv_tanggal);
            btnFavorite = itemView.findViewById(R.id.favorite);

        }
    }
}
