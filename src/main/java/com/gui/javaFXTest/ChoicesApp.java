package com.gui.javaFXTest;

import javafx.application.Application;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.Label;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;
import javafx.util.Pair;
import javafx.util.StringConverter;

import java.util.ArrayList;
import java.util.List;

public class ChoicesApp extends Application {

    // ATTs
    private final ChoiceBox<Pair<String, String>> assetClass = new ChoiceBox<>();
    private final static Pair<String, String> EMPTY_PAIR = new Pair<>("", "");

    // MTHs
    private void initChoice(){
        List<Pair<String, String>> assetClasses = new ArrayList<>();
        assetClasses.add( new Pair("Equipment", "2000"));
        assetClasses.add( new Pair("Furniture", "21000"));
        assetClasses.add( new Pair("Investment", "22000"));

        assetClass.setConverter(new StringConverter<Pair<String, String>>() {
            @Override
            public String toString(Pair<String, String> pair) {
                return pair.getKey();
            }

            @Override
            public Pair<String, String> fromString(String string) {
                return null;
            }
        });

        assetClass.getItems().add( EMPTY_PAIR );
        assetClass.getItems().addAll( assetClasses );
        assetClass.setValue( EMPTY_PAIR );
    }

    // OVRs
    @Override
    public void start(Stage primaryStage) throws Exception {

        Label label = new Label("Asset Class:");
        assetClass.setPrefWidth(200);
        Button saveButton = new Button("Save");

        HBox hBox = new HBox(
                label,
                assetClass,
                saveButton);
        hBox.setSpacing( 10.0d );
        hBox.setAlignment( Pos.CENTER );
        hBox.setPadding( new Insets(40) );

        Scene scene = new Scene(hBox);

        initChoice();

        saveButton.setOnAction((evt) -> System.out.println("saving " + assetClass.getValue()));

        primaryStage.setTitle("ChoicesApp");
        primaryStage.setScene( scene );
        primaryStage.show();

    }
}




















