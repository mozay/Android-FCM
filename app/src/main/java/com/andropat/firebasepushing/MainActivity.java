package com.andropat.firebasepushing;

import android.content.Context;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.widget.Toast;

import com.google.firebase.iid.FirebaseInstanceId;
import com.google.firebase.messaging.FirebaseMessaging;

public class MainActivity extends AppCompatActivity {

    String tokenState;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        SharedPreferences settings = getSharedPreferences("checkToken",
                Context.MODE_PRIVATE);
        tokenState = settings.getString("tokenRegister", "0");

        Log.d("Token State",tokenState);

        if(tokenState.equals("1"))
        {
            Toast.makeText(getBaseContext(),"Daha önce bildirim için kayıt olunmuş",Toast.LENGTH_SHORT).show();
        }
        else{
            FirebaseMessaging.getInstance().subscribeToTopic("test");
            FirebaseInstanceId.getInstance().getToken();
        }
    }



}
