package com.example.user.emrlogin;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
    private EditText Name;
    private EditText Password;
    private Button Login;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Name = (EditText)findViewById(R.id.etName);
        Password =(EditText)findViewById(R.id.etPassword);
        Login =(Button)findViewById(R.id.btnLogin);
        Login.setOnClickListener(new View.OnClickListener(){
            public void onClick(View view){
                validate(Name.getText().toString(),Password.getText().toString());
            }
        });
    }
    private void validate(String userName, String userPassword){
        if((userName.equals("Reader")) && (userPassword.equals("1234"))) {
            Intent intent = new Intent(MainActivity.this, EMR.class);
            startActivity(intent);
        }else{

        }

        }
    }
