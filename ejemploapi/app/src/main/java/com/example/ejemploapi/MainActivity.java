package com.example.ejemploapi;

import androidx.appcompat.app.AppCompatActivity;
import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Button messi  = (Button) findViewById(R.id.buscar);
        Intent diego = new Intent(this,buscar.class);
        private RequestQueue mRequestQueue;
        private StringRequest mStringRequest;


        private String url = "http://192.168.137.1/androidusers/buscar.php";

        messi.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view)
            { startActivity(diego);

            }
        });
        private void sendAndRequestResponse(){
            mRequestQueue = Volley.newRequestQueue(this)
            .Toast.makeText(, "", Toast.LENGTH_SHORT).show();
        }
        private void onErrorResponse(VolleyError error){
            Log.e(TAG,"ERROR:"+ error.toString());

        }
    })
    {
        @Override
                protected Map<String,String>getParams(){

    }
    }


}