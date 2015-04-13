import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class BuildXml {

    public static void main(String[] args) throws IOException {
        System.out.println("Please Input:");
        String input = BuildXml.readInfo(new BufferedReader(new InputStreamReader(System.in)) , "\\u0x04");
        System.out.println(input.replaceAll("&", "&amp;").replaceAll("<" , "&lt;").replaceAll(">" , "&gt;"));
        System.out.println("END!!");
    }

    static String readInfo(BufferedReader reader , String endSign) throws IOException {
        StringBuffer buffer = new StringBuffer();
        for (String temp = "" ; (temp = reader.readLine()) != null && temp.indexOf(endSign) == -1 ;)
            buffer.append(temp).append("\n");
        return buffer.substring(0 , buffer.length() - 1).toString();
    }
}
