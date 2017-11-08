package com.example.samud.emrapplication;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    private EditText Name;
    private EditText Password;
    private TextView info;
    private Button Login;
    private int counter=5;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

       Name=(EditText)findViewById(R.id.etName);
        Password=(EditText)findViewById(R.id.etPassword);
        info=(TextView) findViewById(R.id.tvinfo);
        Login=(Button) findViewById(R.id.btnLogin);

        info.setText("No of attempts remaining:5");

       /* Login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                validate(Name.getText().toString(),Password.getText().toString());
            }
        });*/



    }

    public void OnLogin(View view){

      String username=Name.getText().toString();
        String password= Password.getText().toString();
        String type="login";
        BackgroundWoker backgroundWoker=new BackgroundWoker(this);
        backgroundWoker.execute(type,username,password);


    }







   /* private void validate(String userName,String userPassword){

        if ((userName.equals("Admin"))&&(userPassword.equals("1234"))){
            Intent intent= new Intent(MainActivity.this,Main2Activity.class);
            startActivity(intent);
        }else{
            counter--;

            info.setText("No of attempts remaining:"+ String.valueOf(counter));

            if (counter==0){
                Login.setEnabled(false);
            }
        }
    }*/
}
