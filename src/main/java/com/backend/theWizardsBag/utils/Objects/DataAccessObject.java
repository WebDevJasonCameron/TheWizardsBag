package com.backend.theWizardsBag.utils.Objects;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.List;
import java.util.PropertyResourceBundle;

public abstract class DataAccessObject <T extends DataTransferObject> {

    protected final Connection connection;
    protected final static String LAST_VAL = "SELECT last_value FROM ";

    protected final static String CLASS_SEQUENCE = "class_seq";
    protected final static String CONDITION_SEQUENCE = "condition_seq";
    protected final static String DAMAGETYPE_SEQUENCE = "damagetype_seq";
    protected final static String ITEM_SEQUENCE = "item_seq";
    protected final static String NOTE_SEQUENCE = "note_seq";
    protected final static String SOURCE_SEQUENCE = "source_seq";
    protected final static String SPELL_SEQUENCE = "spell_seq";
    protected final static String TAG_SEQUENCE = "tag_seq";
    protected final static String TYPE_SEQUENCE = "type_seq";

    protected final static String SPELL_CLASS_SEQUENCE = "spell_class_seq";
    protected final static String SPELL_CONDITION_SEQUENCE = "spell_condition_seq";
    protected final static String SPELL_DAMAGETYPE_SEQUENCE = "spell_damagetypes_seq";  // <!> Change to singular
    protected final static String SPELL_TAG_SEQUENCE = "spell_tag_seq";

    // CONs
    public DataAccessObject(Connection connection){
        super();
        this.connection = connection;
    }

    // METHs in a DAO
    public abstract T create(T dto);                    //   Create
    public abstract T findById(long id);                //   Read
    public abstract List<T> findAll();
    public abstract T update(T dto);                    //   Update
    public abstract void delete(long id);               //   Delete

    protected int getLastVal(String sequence) {
        int key = 0;
        String sql = LAST_VAL + sequence;
        try(Statement statement = connection.createStatement()) {
            ResultSet rs = statement.executeQuery(sql);
            while ((rs.next())){
                key = rs.getInt(1);
            }
            return key;

        } catch (SQLException e) {
            e.printStackTrace();
            throw new RuntimeException(e);
        }
    }
}
